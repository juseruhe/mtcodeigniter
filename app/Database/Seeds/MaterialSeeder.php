<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;



class MaterialSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'nombre' => 'Antifluido',
			
		];

		$data2 = [
			'nombre' => 'Lana',
			
		];

		$data3 = [
			'nombre' => 'Algodón',
			
		];

		$data4 = [
			'nombre' => 'Cuero',
			
		];

		


	$this->db->table('materiales')->insert($data);
	$this->db->table('materiales')->insert($data2);
	$this->db->table('materiales')->insert($data3);
	$this->db->table('materiales')->insert($data4);
	
	
	}
}
