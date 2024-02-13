<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsuariosMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
                'null' => false,
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false,
            ],
            'apepat' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false,
            ],
            'apemat' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false,
            ],
            'usuario' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'unique' => true,
                'null' => false,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'unique' => true,
                'null' => true,
            ],
            'telefono' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'unique' => true,
                'null' => true,
            ],
            'direccion' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'password' => [
                'tpye' => 'TEXT',
                'null' => false,
            ],
            'token' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => true,
            ],
            'habilitado' => [
                'type' => 'BOOL',
                'null' => false,
            ],
            'fecha_registro' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'usuario_pagado' => [
                'type' => 'BOOL',
                'null' => true,
            ],
            'fecha_proximo_pago' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'id_rol' => [
                'type' => 'INT',
                'null' => false,
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_rol', 'roles', 'id');
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}