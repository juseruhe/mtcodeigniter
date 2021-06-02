<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductoSeeder extends Seeder
{
	public function run()
	{

		$data = ['nombre' => 'Chaqueta',
			'talla_id' => '1',
			'color_id' => '1',
			'material_id' => '1',
			'categoria_id' => '1',
			'clasificacion_id' => '1',
			'valor' => '85000',
			'cantidad' => '30'
			 ];
			
	
		
				$data2 = ['nombre' => 'Jean',
				'talla_id' => '2',
				'color_id' => '2',
				'material_id' => '2',
				'categoria_id' => '2',
				'clasificacion_id' => '2',
				'valor' => '20000',
				'cantidad' => '100'
			];

			$this->db->table('productos')->insert($data);
		   $this->db->table('productos')->insert($data2);
		
	}
}
