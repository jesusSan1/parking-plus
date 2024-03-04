<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class Usuarios extends BaseController
{
    protected $usuarios;

    public function __construct()
    {
        $this->usuarios = model(UsuarioModel::class);
    }
    public function index()
    {
        return view('usuarios/index');
    }
}