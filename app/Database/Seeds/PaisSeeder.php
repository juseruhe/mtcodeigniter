<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PaisSeeder extends Seeder
{
	public function run()
	{
		$data = [
			"nombre" => "Colombia"
		];

		$data2 = [
			"nombre" => "Perú"
		];

		$data3 = [
			"nombre" => "Ecuador"
		];

		$data4 = [
			"nombre" => "Venezuela"
		];

		$this->db->table('paises')->insert($data);
		$this->db->table('paises')->insert($data2);
		$this->db->table('paises')->insert($data3);
		$this->db->table('paises')->insert($data4);

	}
}
