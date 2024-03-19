<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TipoVehiculosModel;
use CodeIgniter\HTTP\ResponseInterface;

class TipoVehiculos extends BaseController
{
    protected $tipoVehiculos;
    protected $security;

    public function __construct()
    {
        $this->tipoVehiculos = model(TipoVehiculosModel::class);
        $this->security = \Config\Services::security();
    }
    public function index()
    {
        if ($this->request->is('post')) {
            $rules = [
                'type' => [
                    'label' => 'tipo de vehiculo',
                    'rules' => 'required|alpha|min_length[3]',
                    'errors' => [
                        'required' => 'El {field} debe ser llenado',
                        'alpha' => 'El {field} no debe tener caracteres especiales o numeros',
                        'min_length' => 'El {field} debe tener al menos {param} caracteres',
                    ],
                ],
            ];
            if (!$this->validate($rules)) {
                return redirect()->back()->with('list', $this->validation->getErrors())->withInput();
            }
            $data = [
                'nombre' => $this->security->sanitizeFilename(trim($this->request->getPost('type'))),
                'fecha_registro' => date('Y-m-d'),
                'id_usuario' => session('id'),
            ];
            $this->tipoVehiculos->insert($data);
            return redirect()->back()->with('success', 'Datos guardados correctamente');
        }
        return view('tipoVehiculos\index', [
            'tipoVehiculos' => $this->tipoVehiculos->where('id_usuario', session('id'))->findAll(),
        ]);
    }
    public function eliminar (int $id){
        $this->tipoVehiculos->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Tipo de vehiculo eliminado correctamente');
    }
    public function update (int $id){
        if($this->request->is('post')){
            $rules = [
                'type' => [
                    'label' => 'tipo de vehiculo',
                    'rules' => 'required|alpha|min_length[3]',
                    'errors' => [
                        'required' => 'El {field} debe ser llenado',
                        'alpha' => 'El {field} no debe tener caracteres especiales o numeros',
                        'min_length' => 'El {field} debe tener al menos {param} caracteres',
                    ],
                ],
            ];
            if(!$this->validate($rules)){
                return redirect()->back()->with('list', $this->validation->getErrors())->withInput();
            }
            $data = [
                'nombre' => $this->security->sanitizeFilename(trim($this->request->getPost('type')))
            ];
            $this->tipoVehiculos->where('id', $id)->set($data)->update();
            return redirect()->back()->with('success', 'Datos actualizados correctamente')->withInput();
        }
        return view('tipoVehiculos\editar', [
            'data' => $this->tipoVehiculos->where('id', $id)->find()
        ]);
    }
}