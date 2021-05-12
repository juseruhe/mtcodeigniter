<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TallaSeeder extends Seeder
{
	public function run()
	{
		
        $data = [
			'nombre' => 'M'
		];
        
        
        $data2 = [
			'nombre' => 'S'
		];
        
        $data3 = [
			'nombre' => 'L'
		];
        
        
          $data4 = [
			'nombre' => 'XL'
		  ] ;
        
        
        $data5 = [
			'nombre' => 'XXL'
		] ;

    $this->db->table('tallas')->insert($data);
	$this->db->table('tallas')->insert($data2);
	$this->db->table('tallas')->insert($data3);
	$this->db->table('tallas')->insert($data4);
	$this->db->table('tallas')->insert($data5);
        
	}
}
