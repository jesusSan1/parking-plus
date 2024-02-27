<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class Reestablecer extends BaseController
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
                'password' => [
                    'label' => 'contraseña',
                    'rules' => 'required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/]',
                    'errors' => [
                        'required' => 'La {field} debe ser llenada',
                        'regex_match' => 'La {field} debe tener 8 caracteres minimos, una letra mayuscula, una letra minuscula, un numero y un caracter especial',
                    ],
                ],
            ];
            if (!$this->validate($rules)) {
                return redirect()->back()->with('list', $this->validation->getErrors())->withInput();
            }
            $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
            $this->usuario->where('email', session()->get('email'))->set(['password' => $password])->update();
            session()->destroy();
            return redirect()->to('/');
        }
        return view('recuperar\reestablecer');
    }
}