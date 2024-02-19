<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('dashboard/index');
    }
    public function salir()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}