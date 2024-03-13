<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ConfiguracionesModel;
use CodeIgniter\HTTP\ResponseInterface;

class Configuracion extends BaseController
{
    protected $setting;
    protected $security;

    public function __construct()
    {
        $this->setting = model(ConfiguracionesModel::class);
        $this->security = \Config\Services::security();
    }
    public function index()
    {
        if ($this->request->is('post')) {
            $rules = [
                'cost' => [
                    'label' => 'costo general',
                    'rules' => 'required|numeric|greater_than[0]',
                    'errors' => [
                        'required' => 'El {field} debe ser llenado',
                        'numeric' => 'El {field} solo debe contener numeros',
                        'greater_than' => 'El {field} debe ser mayor que {param}',
                    ],
                ],
                'round' => [
                    'label' => 'redondear',
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'El {field} debe ser llenado',
                    ],
                ],
                'tolerance' => [
                    'label' => 'tolerancia',
                    'rules' => 'required|numeric|greater_than[0]',
                    'errors' => [
                        'required' => 'La {field} debe ser llenada',
                        'numeric' => 'La {field} solo debe contener numeros',
                        'greater_than' => 'La {field} debe ser mayor que {param}',
                    ],
                ],
            ];
            if (!$this->validate($rules)) {
                return redirect()->back()->with('list', $this->validation->getErrors())->withInput();
            }
            $data = [
                'costo_general' => $this->security->sanitizeFilename(trim($this->request->getPost('cost'))),
                'tiempo' => $this->security->sanitizeFilename(trim($this->request->getPost('round'))),
                'tolerancia' => $this->security->sanitizeFilename(trim($this->request->getPost('tolerance'))),
            ];
            $this->setting->where('id_usuario', session('id'))->set($data)->update();
            return redirect()->back()->with('success', 'Datos guardados correctamente')->withInput();
        }
        return view('configuracion\index', [
            'data' => $this->setting->where('id_usuario', session('id_rol'))->find(),
        ]);
    }
}