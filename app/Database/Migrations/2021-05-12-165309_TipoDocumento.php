<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TipoDocumento extends Migration
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
                
			],
			'siglas'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 5,
                
            ]
           
    ]);
    $this->forge->addKey('id', TRUE);
    $this->forge->createTable('tipos_documento');
	}

	public function down()
	{
		$this->forge->dropTable('tipos_documento');
	}
}
