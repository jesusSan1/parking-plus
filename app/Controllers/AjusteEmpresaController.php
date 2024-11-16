<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AjustesEmpresa;

class AjusteEmpresaController extends BaseController
{
    private $ajusteEmpresa;
    private $security;

    public function __construct()
    {
        $this->ajusteEmpresa = model(AjustesEmpresa::class);
        $this->security = \Config\Services::security();
    }

    public function index()
    {
        return view('ajustesEmpresa/index', [
            'ajustes' => $this->ajusteEmpresa->findAll(),
        ]);
    }
    public function update(int $id = 1)
    {
        if ($this->request->is('put')) {
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
                    'rules' => 'valid_email|permit_empty',
                    'errors' => [
                        'valid_email' => 'El {field} debe tener formato de email',
                    ],
                ],
                'phone' => [
                    'label' => 'telefono',
                    'rules' => 'numeric|min_length[10]|permit_empty|max_length[15]',
                    'errors' => [
                        'numeric' => 'El {field} solamente debe tener numeros',
                        'min_length' => 'El {field} debe por lo menos tener {param} numeros',
                        'max_length' => 'El {field} no debe tener mas de {param} numeros',
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
            $data = [
                'nombre' => $this->security->sanitizeFilename(trim($this->request->getPost('name'))),
                'email' => $this->security->sanitizeFilename(trim($this->request->getPost('email'))),
                'telefono' => $this->security->sanitizeFilename(trim($this->request->getPost('phone'))),
                'direccion' => $this->security->sanitizeFilename(trim($this->request->getPost('address'))),
            ];
            $this->ajusteEmpresa->where('id', $id)->set($data)->update();
            return redirect()->back()->with('success', 'Los datos se han guardado con exito')->withInput();
        }
        return view('ajustesEmpresa/index', [
            'ajustes' => $this->ajusteEmpresa->findAll(),
        ]);

    }
}
