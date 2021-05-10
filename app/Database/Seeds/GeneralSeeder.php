<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use App\Database\Seeds\MaterialSeeder;

class GeneralSeeder extends Seeder
{
	public function run()
	{
		$this->call(MaterialSeeder::class);
	}
}
