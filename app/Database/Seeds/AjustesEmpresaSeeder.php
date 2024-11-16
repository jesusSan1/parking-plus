<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AjustesEmpresaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nombre' => '',
            'direccion' => '',
            'telefono' => '',
            'email' => '',
            'id_usuario' => 1,
        ];
        $this->db->table('ajustes_empresa')->insert($data);
    }
}
