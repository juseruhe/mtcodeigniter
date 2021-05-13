<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RolSeeder extends Seeder
{
	public function run()
	{
		
		$data = [
			'nombre' => 'Usuario'
		];
			
	  $data2 = [
		'nombre' => 'Administrador'
	  ];
			
	  $this->db->table('roles')->insert($data);
		$this->db->table('roles')->insert($data2);
				
				
	}
}
