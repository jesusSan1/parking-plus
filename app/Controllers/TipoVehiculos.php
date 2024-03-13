<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TipoVehiculos extends BaseController
{
    public function index()
    {
        return view('tipoVehiculos\index');
    }
}