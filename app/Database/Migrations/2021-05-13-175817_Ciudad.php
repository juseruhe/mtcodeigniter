<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ciudad extends Migration
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
                
			],
			'pais_id'          => [
				'type'           => 'INT',
				'constraint'     => 20,
				'unsigned'       => TRUE
				
		]
		
			
    ]);
    $this->forge->addKey('id', TRUE);
	$this->forge->addForeignKey('pais_id','paises','id');
    $this->forge->createTable('ciudades');
	}

	public function down()
	{
		$this->forge->dropTable('ciudades');
	}
}
