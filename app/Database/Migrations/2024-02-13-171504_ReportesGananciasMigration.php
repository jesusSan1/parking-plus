<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ReportesGananciasMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
                'null' => false,
            ],
            'id_vehiculo' => [
                'type' => 'INT',
                'null' => false,
            ],
            'ganancia' => [
                'type' => 'decimal',
                'constraint' => '4,2',
                'null' => false,
            ],
            'fecha' => [
                'type' => 'date',
            ],
            'id_usuario' => [
                'type' => 'INT',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_vehiculo', 'vehiculos', 'id');
        $this->forge->addForeignKey('id_usuario', 'usuarios', 'id');
        $this->forge->createTable('reportes_ganancias');
    }

    public function down()
    {
        $this->forge->dropTable('reportes_ganancias');
    }
}