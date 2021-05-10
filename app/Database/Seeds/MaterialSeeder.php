<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;



class MaterialSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'nombre' => 'Algodón',
			
		];

		$data2 = [
			'nombre' => 'Seda',
			
		];

		$data3 = [
			'nombre' => 'Lana',
			
		];

		$data4 = [
			'nombre' => 'Poliestireno',
			
		];

		$data5 = [
			'nombre' => 'Piel',
			
		];



	$this->db->table('materiales')->insert($data);
	$this->db->table('materiales')->insert($data2);
	$this->db->table('materiales')->insert($data3);
	$this->db->table('materiales')->insert($data4);
	$this->db->table('materiales')->insert($data5);
	
	}
}
