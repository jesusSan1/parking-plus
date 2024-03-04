<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class Usuarios extends BaseController
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
                    'rules' => 'required|min_length[3]|is_unique[usuarios.usuario]',
                    'errors' => [
                        'required' => 'El {field} debe ser llenado',
                        'min_length' => 'El {field} debe tener al menos {param} caracteres',
                        'is_unique' => 'El usuario {value} ya existe, escoger otro nombre de usuario',
                    ],
                ],
                'email' => [
                    'label' => 'correo electronico',
                    'rules' => 'valid_email|is_unique[usuarios.email]',
                    'errors' => [
                        'valid_email' => 'El {field} debe estar en formato de correo electronico',
                        'is_unique' => 'El {field} ya existe, utilizar otro {field}',
                    ],
                ],
                'name' => [
                    'label' => 'nombre',
                    'rules' => 'required|min_length[3]',
                    'errors' => [
                        'required' => 'El {field} debe ser llenado',
                        'min_length' => 'El {field} debe tener al menos {param} caracteres',
                    ],
                ],
                'apepat' => [
                    'label' => 'apellido paterno',
                    'rules' => 'required|min_length[3]',
                    'errors' => [
                        'required' => 'El {field} debe ser llenado',
                        'min_length' => 'El {field} debe tener al menos {param} caracteres',
                    ],
                ],
                'apemat' => [
                    'label' => 'apellido materno',
                    'rules' => 'required|min_length[3]',
                    'errors' => [
                        'required' => 'El {field} debe ser llenado',
                        'min_length' => 'El {field} debe tener al menos {param} caracteres',
                    ],
                ],
                'password' => [
                    'label' => 'contraseña',
                    'rules' => 'required|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/]',
                    'errors' => [
                        'required' => 'La {field} debe ser llenada',
                        'regex_match' => 'La {field} debe tener 8 caracteres minimos, una letra mayuscula, una letra minuscula, un numero y un caracter especial',
                    ],
                ],
                'address' => [
                    'label' => 'dirección',
                    'rules' => 'required|min_length[3]',
                    'errors' => [
                        'required' => 'La {field} debe ser llenada',
                        'min_length' => 'La {field} debe tener al menos {param} caracteres',
                    ],
                ],
                'phone' => [
                    'label' => 'telefono',
                    'rules' => 'required|integer|min_length[10]|max_length[13]',
                    'errors' => [
                        'required' => 'El {field} debe ser llenado',
                        'integer' => 'El {field} debe estar en numeros',
                        'min_length' => 'El {field} debe tener al menos {param} numeros',
                        'max_length' => 'El {field} no debe tener mas de {param} numeros',
                    ],
                ],
            ];
            if (!$this->validate($rules)) {
                return redirect()->back()->with('list', $this->validation->getErrors())->withInput();
            }
        }
        return view('usuarios/index');
    }
}