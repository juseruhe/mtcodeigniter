<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuario extends Migration
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

			'tipo_documento_id'          => [
				'type'           => 'INT',
				'constraint'     => 20,
				'unsigned'       => TRUE
				
		],

		'numero_documento'          => [
			'type'           => 'INT',
			'constraint'     => 20
			],



       'nombres'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 255
                
			],

			'apellidos'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 255
                
			],


            'genero_id'          => [
				'type'           => 'INT',
				'constraint'     => 20,
				'unsigned'       => TRUE
				
			],

			'fecha_nacimiento'          => [
				'type'           => 'DATE'
				
			],

			'correo'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 255
                
			],

			'contrasena'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 255
                
			],

			'direccion'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 255
                
			],

			'telefono'          => [
                'type'           => 'INT',
                'constraint'     => 255
                
			],

			'rol_id'          => [
				'type'           => 'INT',
				'constraint'     => 20,
				'unsigned'       => TRUE
				
			],
		
			
    ]);
    $this->forge->addKey('id', TRUE);
	$this->forge->addForeignKey('tipo_documento_id','tipos_documento','id');
	$this->forge->addForeignKey('genero_id','generos','id');
	$this->forge->addForeignKey('rol_id','roles','id');
    $this->forge->createTable('usuarios');
	}

	public function down()
	{
		$this->forge->dropTable('usuarios');
	}
}
