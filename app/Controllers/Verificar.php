<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class Verificar extends BaseController
{
    protected $usuario;

    public function __construct()
    {
        $this->usuario = model(UsuarioModel::class);
    }

    public function index()
    {
        if ($this->request->is('post')) {
            $rules = [
                'token' => [
                    'label' => 'token',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'El {field} debe ser llenado',
                    ],
                ],
            ];
            if (!$this->validate($rules)) {
                return redirect()->back()->with('list', $this->validation->getErrors())->withInput();
            }
            $tokenUser = $this->request->getPost('token');
            $tokenUserDataBase = $this->usuario->where('email', session()->get('correo'))->first();
            if ($tokenUser == $tokenUserDataBase['token']) {
                return redirect()->to('reestablecer');
            }
            return redirect()->back()->with('errors', 'El token es incorrecto')->withInput();
        }
        return view('recuperar\verificar');
    }
}