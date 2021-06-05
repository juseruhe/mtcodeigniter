<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Producto extends Migration
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
				'constraint'     => 20
				],

		'imagen'          => [
			'type'           => 'VARCHAR',
			'constraint'     => 255,
			'null'  => TRUE
			],



       'talla_id'          => [
                'type'           => 'INT',
                'constraint'     => 20,
				'unsigned'       => TRUE
                
			],

			'color_id'          => [
                'type'           => 'INT',
                'constraint'     => 20,
				'unsigned'       => TRUE
                
			],


            'material_id'          => [
				'type'           => 'INT',
				'constraint'     => 20,
				'unsigned'       => TRUE
				
			],

			'categoria_id'          => [
				'type'           => 'INT',
				'constraint'     => 20,
				'unsigned'       => TRUE
				
			],

			'clasificacion_id'          => [
                'type'           => 'INT',
                'constraint'     => 20,
				'unsigned'       => TRUE
                
			],

			'valor'          => [
                'type'           => 'INT',
                'constraint'     => 30
                
			],

			'cantidad'          => [
                'type'           => 'INT',
                'constraint'     => 30
                
			]

			
			]);

			$this->forge->addKey('id',TRUE);
			$this->forge->addForeignKey('talla_id','tallas','id');
			$this->forge->addForeignKey('color_id','colores','id');
			$this->forge->addForeignKey('material_id','materiales','id');
			$this->forge->addForeignKey('categoria_id','categorias','id');
			$this->forge->addForeignKey('clasificacion_id','clasificaciones','id');
			$this->forge->createTable('productos');
	}

	public function down()
	{
		$this->forge->dropTable('productos');
	}
}
