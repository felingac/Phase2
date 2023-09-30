<?php

namespace App\Controllers;

use App\Models\EmpleadosModels;

class Empleados extends BaseController
{
    protected $EmpleadosModels;

    public function __construct() {
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
}