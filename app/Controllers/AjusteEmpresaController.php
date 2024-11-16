<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AjustesEmpresa;

class AjusteEmpresaController extends BaseController
{
    private $ajusteEmpresa;

    public function __construct()
    {
        $this->ajusteEmpresa = model(AjustesEmpresa::class);
    }

    public function index()
    {
        if ($this->request->is('post')) {
            $rules = [
                'name' => [
                    'label' => 'nombre',
                    'rules' => 'required|min_length[3]',
                    'errors' => [
                        'required' => 'El {field} debe ser llenado',
                        'min_length' => 'El {field} debe tener por lo menos 3 caracteres',
                    ],
                ],
                'email' => [
                    'label' => 'correo electronico',
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'El {field} debe ser llenado',
                        'valid_email' => 'El {field} debe tener formato de email',
                    ],
                ],
                'phone' => [
                    'label' => 'telefono',
                    'rules' => 'required|numeric|min_length[10]',
                    'errors' => [
                        'required' => 'El {field} debe ser llenado',
                        'numeric' => 'El {field} solamente debe tener numeros',
                        'min_length' => 'El {field} debe por lo menos tener 10 numeros',
                    ],
                ],
                'address' => [
                    'label' => 'dirección',
                    'rules' => 'required|min_length[3]',
                    'errors' => [
                        'required' => 'La {field} debe ser llenada',
                        'min_length' => 'La {field} debe tener por lo menos 3 caracteres',
                    ],
                ],
            ];
            if (!$this->validate($rules)) {
                return redirect()->back()->with('list', $this->validation->getErrors())->withInput();
            }
            //Guardar los datos
            $nombre = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $telefono = $this->request->getPost('phone');
            $direccion = $this->request->getPost('address');

            dd($nombre, $email, $telefono, $direccion);
        }
        return view('ajustesEmpresa/index');
    }
}
