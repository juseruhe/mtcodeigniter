<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pais extends Migration
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
                'constraint'     => 255
                
			]
			
    ]);
    $this->forge->addKey('id', TRUE);
    $this->forge->createTable('paises');
	}

	public function down()
	{
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('paises');
	}
}
