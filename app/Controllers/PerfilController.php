<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class PerfilController extends BaseController
{
    private $usuario;
    private $session;

    public function __construct()
    {
        $this->usuario = model(UsuarioModel::class);
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        return view('perfil/index', [
            'users' => $this->usuario->where('id', $this->session->get('id'))->find(),
        ]);
    }
    public function update(int $id = 1)
    {
        dd('Datos actualizados correctamente');
    }
}
