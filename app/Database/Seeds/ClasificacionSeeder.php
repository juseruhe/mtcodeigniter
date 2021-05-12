<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ClasificacionSeeder extends Seeder
{
	public function run()
	{

		$data= [
			'nombre' => 'Hombres'
		];
            
       $data2 = [
		'nombre' => 'Mujeres'
	   ];
            
       $data3 = [
		'nombre' => 'Niños'
	   ];
            
       $data4= [
		'nombre' => 'Unisex'
	   ];
            
	   $this->db->table('clasificaciones')->insert($data);
	   $this->db->table('clasificaciones')->insert($data2);
	   $this->db->table('clasificaciones')->insert($data3);
	   $this->db->table('clasificaciones')->insert($data4);

       
		
	}
}
