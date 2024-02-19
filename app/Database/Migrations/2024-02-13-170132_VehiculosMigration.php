<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class VehiculosMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
                'null' => false,
            ],
            'id_tipo_vehiculo' => [
                'type' => 'INT',
                'null' => false,
            ],
            'placas' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
                'null' => true,
            ],
            'descripcion' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'fecha_ingreso_vehiculo' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'fecha_retiro_vehiculo' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'pago_final' => [
                'type' => 'DECIMAL',
                'constraint' => '4,2',
                'null' => true,
            ],
            'is_parking' => [
                'type' => 'BOOL',
                'null' => false,
            ],
            'id_usuario' => [
                'type' => 'INT',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_tipo_vehiculo', 'tipo_vehiculos', 'id');
        $this->forge->addForeignKey('id_usuario', 'usuarios', 'id');
        $this->forge->createTable('vehiculos');
    }

    public function down()
    {
        $this->forge->dropTable('vehiculos');
    }
}