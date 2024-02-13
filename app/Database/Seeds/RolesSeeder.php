<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RolesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nombre' => 'admin',
                'descripcion' => 'soy el admin',
            ],
            [
                'nombre' => 'gerente',
                'descripcion' => 'Soy el gerente',
            ],
            [
                'nombre' => 'trabajador',
                'descripcion' => 'Soy el trabajador',
            ],
            [
                'nombre' => 'demo',
                'descripcion' => 'Soy el usuario demo',
            ],
        ];
        $this->db->table('roles')->insertBatch($data);
    }
}