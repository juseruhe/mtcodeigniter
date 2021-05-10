<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Material extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id'          => [
                    'type'           => 'INT',
                    'constraint'     => 20,
                    'unsigned'       => TRUE,
                    'auto_increment' => TRUE
            ],
            'nombre'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                
            ]
           
    ]);
    $this->forge->addKey('id', TRUE);
    $this->forge->createTable('materiales');
	}

	public function down()
	{
		$this->forge->dropTable('materiales');
	}
}
