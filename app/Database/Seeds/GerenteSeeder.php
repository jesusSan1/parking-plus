<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GerenteSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nombre' => 'test',
            'apepat' => 'test',
            'apemat' => 'test',
            'usuario' => 'test',
            'email' => 'gerentetest@test.com',
            'telefono' => '9999999999',
            'direccion' => '',
            'password' => password_hash('Test123!', PASSWORD_DEFAULT),
            'token' => '',
            'habilitado' => true,
            'fecha_registro' => date('Y-m-d'),
            'usuario_pagado' => true,
            'fecha_proximo_pago' => '',
            'id_rol' => 2,
        ];
        $this->db->table('usuarios')->insert($data);
    }
}