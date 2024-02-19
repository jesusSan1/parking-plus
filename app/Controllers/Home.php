<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Home extends BaseController
{
    protected $usuarios;

    public function __construct()
    {
        $this->usuarios = model(UsuarioModel::class);
    }
    public function index()
    {
        if ($this->request->is('post')) {
            $rules = [
                'user' => [
                    'label' => 'usuario',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'El {field} debe ser llenado',
                    ],
                ],
                'password' => [
                    'label' => 'contraseña',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'La {field} debe ser llenada',
                    ],
                ],
            ];
            if (!$this->validate($rules)) {
                return redirect()->back()->with('list', $this->validation->getErrors())->withInput();
            }
            $user = $this->request->getPost('user');
            $password = $this->request->getPost('password');
            $existUser = $this->usuarios->where('usuario', $user)->first();
            if ($existUser) {
                $pass = $existUser['password'];
                $activeUser = $existUser['habilitado'];
                if ($activeUser == 1) {
                    if (password_verify($password, $pass)) {
                        $sess_data = [
                            'id' => $existUser['id'],
                            'name' => $existUser['nombre'],
                            'user' => $existUser['usuario'],
                            'email' => $existUser['email'],
                            'id_rol' => $existUser['id_rol'],
                            'logged_in' => true,
                        ];
                        session()->set($sess_data);
                        return redirect()->to('dashboard');
                    } else {
                        return redirect()->back()->with('errors', 'usuario y/o contraseña incorrecta')->withInput();
                    }
                } else {
                    return redirect()->back()->with('errors', 'El usuario no puede ingresar al sistema')->withInput();
                }
            } else {
                return redirect()->back()->with('errors', 'El usuario no existe')->withInput();
            }
        }
        return view('login/index');
    }
}