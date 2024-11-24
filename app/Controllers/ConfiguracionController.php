<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Configuracion;

class ConfiguracionController extends BaseController
{
    private $configuracion;
    private $security;

    public function __construct()
    {
        $this->configuracion = model(Configuracion::class);
        $this->security = \Config\Services::security();
    }

    public function index()
    {
        return view('configuracion/index', [
            'configuraciones' => $this->configuracion->findAll(),
        ]);
    }

    public function update(int $id = 1)
    {
        if ($this->request->is('put')) {
            $rules = [
                'general-cost' => [
                    'label' => 'costo general',
                    'rules' => 'required|numeric',
                    'errors' => [
                        'required' => 'El {field} debe ser llenado',
                        'numeric' => 'El {field} debe ser numerico',
                    ],
                ],
                'time' => [
                    'label' => 'tiempo',
                    'rules' => 'required|numeric',
                    'errors' => [
                        'required' => 'El {field} debe ser llenado',
                        'numeric' => 'El {field} debe ser numerico',
                    ],
                ],
                'tolerance' => [
                    'label' => 'tolerancia',
                    'rules' => 'required|numeric',
                    'errors' => [
                        'required' => 'El {field} debe ser llenado',
                        'numeric' => 'El {field} debe ser numerico',
                    ],
                ],
            ];
            if (!$this->validate($rules)) {
                return redirect()->back()->with('list', $this->validation->getErrors())->withInput();
            }
            $data = [
                'costo_general' => $this->security->sanitizeFilename($this->request->getPost('general-cost')),
                'tiempo' => $this->security->sanitizeFilename($this->request->getPost('time')),
                'tolerancia' => $this->security->sanitizeFilename($this->request->getPost('tolerance')),
            ];
            $this->configuracion->where('id', $id)->set($data)->update();
            return redirect()->back()->with('success', 'Los datos se han guardado con exito')->withInput();
        }
        return view('configuracion/index', [
            'configuraciones' => $this->configuracion->findAll(),
        ]);
    }
}
