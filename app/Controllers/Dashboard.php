<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TipoVehiculosModel;

class Dashboard extends BaseController
{
    protected $usuarios;
    protected $tipoVehiculos;

    public function __construct()
    {
        $this->usuarios = model(UsuarioModel::class);
        $this->tipoVehiculos = model(TipoVehiculosModel::class);
    }
    public function index()
    {
        return view('dashboard/index', [
            'gerentes' => $this->usuarios->where('id_rol', 2)->findAll(),
            'tipoVehiculos' => $this->tipoVehiculos->where('id_usuario', session('id_rol'))->findAll()
        ]);
    }
    public function salir()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}