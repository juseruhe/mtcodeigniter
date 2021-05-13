<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use App\Database\Seeds\MaterialSeeder;

use App\Database\Seeds\CategoriaSeeder;

class GeneralSeeder extends Seeder
{
	public function run()
	{
		$this->call(MaterialSeeder::class);
		$this->call(CategoriaSeeder::class);
		$this->call(ColorSeeder::class);
		$this->call(ClasificacionSeeder::class);
		$this->call(TallaSeeder::class);
		$this->call(TipoDocumentoSeeder::class);
		$this->call(GeneroSeeder::class);
		$this->call(PaisSeeder::class);

	}
}
