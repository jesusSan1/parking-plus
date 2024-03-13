<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ConfiguracionesModel;
use CodeIgniter\HTTP\ResponseInterface;

class Configuracion extends BaseController
{
    protected $setting;

    public function __construct()
    {
        $this->setting = model(ConfiguracionesModel::class);
    }
    public function index()
    {
        return view('configuracion\index', [
            'data' => $this->setting->where('id_usuario', session('id_rol'))->find(),
        ]);
    }
}