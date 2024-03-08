<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class Perfil extends BaseController
{
    protected $usuarios;

    public function __construct()
    {
        $this->usuarios = model(UsuarioModel::class);
    }
    public function index()
    {
        return view('perfil\index', [
            'datos' => $this->usuarios->where('id', session('id'))->find(),
        ]);
    }
}