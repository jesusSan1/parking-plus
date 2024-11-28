<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class PerfilController extends BaseController
{
    private $usuario;
    private $session;
    private $security;

    public function __construct()
    {
        $this->usuario = model(UsuarioModel::class);
        $this->session = \Config\Services::session();
        $this->security = \Config\Services::security();
    }
    public function index()
    {
        return view('perfil/index', [
            'users' => $this->usuario->where('id', $this->session->get('id'))->find(),
        ]);
    }
    public function update(int $id = 1)
    {
        $rules = [
            'name' => [
                'label' => 'nombre',
                'rules' => 'required|min_length[5]|max_length[20]|alpha_space',
                'errors' => [
                    'required' => 'El {field} debe ser llenado',
                    'min_length' => 'El {field} debe tener minmo {param} caracteres',
                    'max_length' => 'El {field} no debe exceder los {param} caracteres',
                    'alpha_space' => 'El {field} solo puede contener letras',
                ],
            ],
            'paternal-name' => [
                'label' => 'apellido paterno',
                'rules' => 'required|min_length[5]|max_length[20]|alpha_space',
                'errors' => [
                    'required' => 'El {field} debe ser llenado',
                    'min_length' => 'El {field} debe tener minimo {param} caracteres',
                    'max_length' => 'El {field} no puede exceder los {param} caracteres',
                    'alpha_space' => 'El {field} solo puede contener letras',
                ],
            ],
            'maternal-name' => [
                'label' => 'apellido materno',
                'rules' => 'required|min_length[5]|max_length[20]|alpha_space',
                'errors' => [
                    'required' => 'El {field} debe ser llenado',
                    'min_length' => 'El {field} debe tener minimo {param} caracteres',
                    'max_length' => 'El {field} no puede exceder los {param} caracteres',
                    'alpha_space' => 'El {field} solo puede contener letras',
                ],
            ],
            'username' => [
                'label' => 'usuario',
                'rules' => "required|min_length[5]|is_unique[usuarios.usuario,id,{$id}]|alpha_numeric",
                'errors' => [
                    'required' => 'El {field} debe ser llenado',
                    'min_length' => 'El {field} debe tener minimo {param} caracteres',
                    'is_unique' => 'El {field} {value} se encuentra en uso',
                    'alpha_numeric' => 'El {field} no debe contener espacios',
                ],
            ],
            'email' => [
                'label' => 'correo electronico',
                'rules' => "required|valid_email|is_unique[usuarios.email,id,{$id}]|min_length[3]",
                'errors' => [
                    'required' => 'El {field} debe ser llenado',
                    'valid_email' => '{value} debe estar en formato de {field}',
                    'is_unique' => 'El {value} se encuentra en uso',
                    'min_length' => 'El {field} debe tener minimo {param} caracteres',
                ],
            ],
            'password' => [
                'label' => 'contraseña',
                'rules' => 'permit_empty|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/]',
                'errors' => [
                    'regex_match' => 'La {field} debe tener 8 caracteres minimos, una letra mayuscula, una letra minuscula, un numero y un caracter especial',
                ],
            ],
            'address' => [
                'label' => 'dirección',
                'rules' => 'permit_empty|min_length[3]',
                'errors' => [
                    'min_length' => 'El {field} debe tener minmo {param} caracteres',
                ],
            ],
            'phone' => [
                'label' => 'telefono',
                'rules' => "permit_empty|numeric|min_length[10]|is_unique[usuarios.telefono,id,{$id}]",
                'errors' => [
                    'numeric' => 'Solo se permiten numeros',
                    'min_length' => 'El {field} debe tener minimo {param} numeros',
                    'is_unique' => 'EL {field} ya se encuentra en uso',
                ],
            ],
        ];
        if (!$this->validate($rules)) {
            return redirect()->back()->with('list', $this->validation->getErrors())->withInput();
        }
        //update data
        $userData = $this->usuario->select('password, direccion, telefono')->where('id', $id)->first();
        $data = [
            'nombre' => $this->security->sanitizeFilename($this->request->getPost('name')),
            'apepat' => $this->security->sanitizeFilename($this->request->getPost('paternal-name')),
            'apemat' => $this->security->sanitizeFilename($this->request->getPost('maternal-name')),
            'usuario' => $this->security->sanitizeFilename($this->request->getPost('username')),
            'email' => $this->security->sanitizeFilename($this->request->getPost('email')),
            'password' => $this->request->getPost('password')
            ? password_hash($this->security->sanitizeFilename($this->request->getPost('password')), PASSWORD_DEFAULT)
            : $userData['password'],
            'direccion' => $this->request->getPost('address')
            ? $this->security->sanitizeFilename($this->request->getPost('address'))
            : $userData['direccion'],
            'telefono' => $this->request->getPost('phone')
            ? $this->security->sanitizeFilename($this->request->getPost('phone'))
            : $userData['telefono'],
        ];
        $this->usuario->where('id', $id)->set($data)->update();
        return redirect()->back()->with('success', 'Los datos se han guardado con exito')->withInput();
    }
}
