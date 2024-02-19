<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TipoVehiculosMigration extends Migration
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
            'fecha_registro' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'id_usuario' => [
                'type' => 'INT',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_usuario', 'usuarios', 'id');
        $this->forge->createTable('tipo_vehiculos');
    }

    public function down()
    {
        $this->forge->dropTable('tipo_vehiculos');
    }
}