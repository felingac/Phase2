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
            'content' => 'Empleados/view/view',
            'scripts' => 'Empleados/view/view_scripts',
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


        if (!isset($dataForm['id'])) {
            $photoRoute = $this->uploadPhoto($_FILES['photo_id']);
            $dataForm['photo_id'] = $photoRoute;

            $this->EmpleadosModels->insert($dataForm);

            return redirect()->to(base_url('Empleados'));
        } else {

            $photoRoute = $this->uploadPhoto($_FILES['photo_id']);

            $dataForm['photo_id'] = $photoRoute;

            $this->EmpleadosModels->update($dataForm['id'], $dataForm);
            return redirect()->to(base_url('Empleados/'));
        }
    }

    public function delete()
    {

        $dataForm = $this->request->getPost();

        if (!isset($dataForm['id'])) {
            $this->EmpleadosModels->insert($dataForm);
            return redirect()->to(base_url('Empleados/'));
        } else {
            $this->EmpleadosModels->update($dataForm['id'], $dataForm);
            return redirect()->to(base_url('Empleados/'));
        }
    }


    function uploadPhoto($file)
    {
        if ($file instanceof \CodeIgniter\Files\File && !$file->hasMoved()) {
            $filepath = WRITEPATH . 'uploads/' . $file->store();

            $data = ['uploaded_fileinfo' => new \CodeIgniter\Files\File($filepath)];

            return $data;
        }

        $data = ['errors' => 'The file has already been moved.'];

        return $data;
    }
}
