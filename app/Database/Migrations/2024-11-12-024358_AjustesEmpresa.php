<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AjustesEmpresa extends Migration
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
                'constraint' => 255,
                'null' => false,
            ],
            'direccion' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'telefono' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => false,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'id_usuario' => [
                'type' => 'INT',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_usuario', 'usuarios', 'id');
        $this->forge->createTable('ajustes_empresa');
    }

    public function down()
    {
        $this->forge->dropTable('ajustes_empresa');
    }
}
