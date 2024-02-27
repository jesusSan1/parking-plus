<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TipoVehiculosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nombre' => 'Sin categoria',
            'fecha_registro' => date('Y-m-d'),
            'id_usuario' => 1,
        ];
        $this->db->table('tipo_vehiculos')->insert($data);
    }
}