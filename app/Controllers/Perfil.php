<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class Perfil extends BaseController
{
    protected $usuarios;
    protected $security;

    public function __construct()
    {
        $this->usuarios = model(UsuarioModel::class);
        $this->security = \Config\Services::security();
    }
    public function index()
    {
        if ($this->request->is('post')) {
            $rules = [
                'user' => [
                    'label' => 'usuario',
                    'rules' => 'required|min_length[3]|is_unique[usuarios.usuario, id, ' . session('id') . ']',
                    'errors' => [
                        'required' => 'El {field} debe ser llenado',
                        'min_length' => 'El {field} debe tener al menos {param} caracteres',
                        'is_unique' => 'El usuario {value} ya existe, escoger otro nombre de usuario',
                    ],
                ],
                'email' => [
                    'label' => 'correo electronico',
                    'rules' => 'valid_email|is_unique[usuarios.email, id,' . session('id') . ']',
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
                    'rules' => 'regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/]|permit_empty',
                    'errors' => [
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
            $user = $this->usuarios->where('id', session('id'))->first();
            $data = [
                'nombre' => $this->security->sanitizeFilename(trim($this->request->getPost('name'))),
                'apepat' => $this->security->sanitizeFilename(trim($this->request->getPost('apepat'))),
                'apemat' => $this->security->sanitizeFilename(trim($this->request->getPost('apemat'))),
                'usuario' => $this->security->sanitizeFilename(trim($this->request->getPost('user'))),
                'email' => $this->security->sanitizeFilename(trim($this->request->getPost('email'))),
                'telefono' => $this->security->sanitizeFilename(trim($this->request->getPost('phone'))),
                'direccion' => $this->security->sanitizeFilename(trim($this->request->getPost('address'))),
                'password' => (empty($this->request->getPost('password')) ? $user['password'] : password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)),
            ];
            $this->usuarios->where('id', session('id'))->set($data)->update();
            return redirect()->back()->with('success', 'Datos actualizados correctamente');
        }
        return view('perfil\index', [
            'datos' => $this->usuarios->where('id', session('id'))->find(),
        ]);
    }
}