<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ConfiguracionesMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
                'null' => false,
            ],
            'costo_general' => [
                'type' => 'decimal',
                'constraint' => '4,2',
                'null' => false,
            ],
            'tiempo' => [
                'type' => 'INT',
                'null' => false,
            ],
            'tolerancia' => [
                'type' => 'INT',
                'null' => false,
            ],
            'id_usuario' => [
                'type' => 'INT',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_usuario', 'usuarios', 'id');
        $this->forge->createTable('configuraciones');
    }

    public function down()
    {
        $this->forge->dropTable('configuraciones');
    }
}