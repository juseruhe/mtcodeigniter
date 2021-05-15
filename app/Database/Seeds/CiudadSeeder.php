<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CiudadSeeder extends Seeder
{
	public function run()
	{
		$data = [
			"nombre" => "Bogotá D.C.",
            "pais_id" => 1
		];

		$data2 = [
			"nombre" => "Lima",
			"pais_id" => 2
		];

		$data3 = [
			"nombre" => "Quito",
			"pais_id" => 3
		];

		$data4 = [
			"nombre" => "Caracás",
			"pais_id" => 4
		];

		$this->db->table('ciudades')->insert($data);
		$this->db->table('ciudades')->insert($data2);
		$this->db->table('ciudades')->insert($data3);
		$this->db->table('ciudades')->insert($data4);
	}
}
