<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Configuracion extends BaseController
{
    public function index()
    {
        return view('configuracion\index');
    }
}