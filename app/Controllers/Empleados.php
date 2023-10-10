<?php

namespace App\Controllers;

use App\Models\EmpleadosModels;
use CodeIgniter\Files\File;

class Empleados extends BaseController
{
    protected $EmpleadosModels;

    public function __construct()
    {
        $this->EmpleadosModels = new EmpleadosModels();
    }

    public function index()
    {
        $data = [
            'title' => '',
            'content' => 'Empleados/View/view',
            'scripts' => 'Empleados/View/view_scripts',
            'empleados' => $this->EmpleadosModels->findAll()
        ];

        return view('Layout/wrapper', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Crear nuevo empleado',
            'content' => 'Empleados/Create/view',
            'scripts' => 'Empleados/Create/view_scripts',
            'empleados' => $this->EmpleadosModels->findAll()
        ];

        return view('Layout/wrapper', $data);
    }

    public function edit(Int $id)
    {
        $empleado = $this->EmpleadosModels->find($id);

        if (!empty($empleado)) {
            $data = [
                'title' => 'Editar empleado',
                'content' => 'Empleados/Edit/view',
                'scripts' => 'Empleados/Edit/view_scripts',
                'empleado' => $empleado
            ];

            return view('Layout/wrapper', $data);
        }
    }

    public function save()
    {

        $dataForm = $this->request->getPost();

        /* var_dump($_FILES['photo_id']);
        var_dump($this->request->getPost('photo_id'));
        die; */


        if (!isset($dataForm['id'])) {
            $photoRoute = $this->uploadPhoto($this->request->getFile('photo_id'), $dataForm['code']);
            $dataForm['photo_id'] = $photoRoute;

            $this->EmpleadosModels->insert($dataForm);

            return redirect()->to(base_url('Empleados'));
        } else {

            $photoRoute = $this->uploadPhoto($this->request->getFile('photo_id'), $dataForm['code']);

            $dataForm['photo_id'] = $photoRoute;

            $this->EmpleadosModels->update($dataForm['id'], $dataForm);
            return redirect()->to(base_url('Empleados/'));
        }
    }

    public function delete()
    {

        $dataForm = $this->request->getPost();

        $employee = $this->EmpleadosModels->find($dataForm['id']);

        $absolutePath = ROOTPATH.$employee['photo_id'];
        unlink($absolutePath);
        $this->EmpleadosModels->delete($dataForm['id']);
        return json_encode(['message' => 'Employee deleted', 'state' => true]);
    }


    function uploadPhoto($file, $code)
    {

        $file_name = $file;

        if ($file_name->getName() != null) {

            $date = str_replace(':', '', date('YmdHis'));
            $limpiarMayus = trim(strtolower($file_name->getName()));
            $limpiarCaracteres = preg_replace('/\.(?=.*\.)/', '', $limpiarMayus);
            $limpiarEspacios = str_replace(' ', '', $limpiarCaracteres);
            $photoFile = $date.'_'.$limpiarEspacios;

            $extension = pathinfo($photoFile, PATHINFO_EXTENSION);
            $fileFolder = strtoupper(trim($code));

            if (!is_dir('uploads/employees/'.$fileFolder)) {
                mkdir('./uploads/employees/' . $fileFolder, 0755, true);
            }
            $file_name->move(ROOTPATH.'uploads/employees/'.$fileFolder.'/', $photoFile);
            $path = '/uploads/employees/' . $fileFolder . '/' . $photoFile;

            return $path;
        }
    }
}
