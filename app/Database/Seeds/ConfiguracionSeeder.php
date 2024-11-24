<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ConfiguracionSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'costo_general' => '',
            'tiempo' => '',
            'tolerancia' => '',
            'id_usuario' => 1,
        ];
        $this->db->table('configuraciones')->insert($data);
    }
}
