<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ColorSeeder extends Seeder
{
	public function run()
	{
		
		$data = [
			"nombre"=>"azul"
		];
		 
		$data2 = [
			"nombre"=>"negro"
		];
		 
		$data3= [
			"nombre"=>"rojo"
		];

		$this->db->table('colores')->insert($data);
		$this->db->table('colores')->insert($data2);
		$this->db->table('colores')->insert($data3);
	}
}
