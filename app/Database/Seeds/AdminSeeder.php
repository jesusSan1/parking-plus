<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nombre' => 'admin',
            'apepat' => 'admin',
            'apemat' => 'admin',
            'usuario' => 'admin',
            'email' => 'test@test.com',
            'telefono' => '0000000000',
            'direccion' => '',
            'password' => password_hash('Admin123!', PASSWORD_DEFAULT),
            'token' => '',
            'habilitado' => true,
            'fecha_registro' => date('Y-m-d'),
            'usuario_pagado' => true,
            'fecha_proximo_pago' => '',
            'id_rol' => 1,
        ];
        $this->db->table('usuarios')->insert($data);
    }
}