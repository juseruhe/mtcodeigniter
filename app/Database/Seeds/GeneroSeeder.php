<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GeneroSeeder extends Seeder
{
	public function run()
	{
		
           $data = [
			'nombre' => 'Masculino' 
		   ] ;
        

        
            $data2 = [
				'nombre' => 'Femenino'
			];

			$this->db->table('generos')->insert($data);
			$this->db->table('generos')->insert($data2);
	}
}
