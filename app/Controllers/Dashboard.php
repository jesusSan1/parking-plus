<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    protected $usuarios;

    public function __construct()
    {
        $this->usuarios = model(UsuarioModel::class);
    }
    public function index()
    {
        return view('dashboard/index', [
            'gerentes' => $this->usuarios->where('id_rol', 2)->findAll(),
        ]);
    }
    public function salir()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}