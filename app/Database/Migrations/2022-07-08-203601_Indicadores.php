<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Indicadores extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'indicador' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],
            'valor' => [
                'type' => 'TEXT',
                'null' => false,
                
            ],
            'fecha_ingreso' => [
                'type' => 'DATE',
                'null' => false,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('indicadores');
    }

    public function down()
    {
        $this->forge->dropTable('indicadores');
    }
}
