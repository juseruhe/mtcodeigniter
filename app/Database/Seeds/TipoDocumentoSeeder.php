<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
	public function run()
	{
		
           $data = [
			'nombre' => 'Cédula de Ciudadanía',
            'siglas' => 'CC'
		   ];

        
          $data2 =[
			'nombre' => 'Tarjeta de Identidad',
            'siglas' => 'TI'
		  ];
        

        
           $data3 =[
			'nombre' => 'Registro Cívil',
            'siglas' => 'RC'
		   ];
        

        
           $data4 = [
			'nombre' => 'Pasaporte de Permanencia',
            'siglas' => 'PP'
		   ];
        


        
           $data5 = [
			'nombre' => 'Cédula de Extranjería',
            'siglas' => 'CE'
		   ];

		   $this->db->table('tipos_documento')->insert($data);
		   $this->db->table('tipos_documento')->insert($data2);
		   $this->db->table('tipos_documento')->insert($data3);
		   $this->db->table('tipos_documento')->insert($data4);
		   $this->db->table('tipos_documento')->insert($data5);
        
	}
}
