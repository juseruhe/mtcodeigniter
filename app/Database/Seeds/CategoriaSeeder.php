<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoriaSeeder extends Seeder
{
	public function run()
	{
		
           $data = [
			   'Nombre' => 'Pantalón'
			   ] ;
        

        
           $data2 = [
			'Nombre' => 'Camisas'
		   ] ;
        

        
            $data3 = [
				'Nombre' => 'Camisetas'
			];
        

        
           $data4 = [
			'Nombre' => 'Corbatas'
		   ] ;
        

        
           $data5 = [
			'Nombre' => 'Unisex'
		   ] ;
       
      
           $data6 = [
			'Nombre' => 'Chaquetas'
		   ] ;

		   $this->db->table('categorias')->insert($data);
		   $this->db->table('categorias')->insert($data2);
		   $this->db->table('categorias')->insert($data3);
		   $this->db->table('categorias')->insert($data4);
		   $this->db->table('categorias')->insert($data5);
		   $this->db->table('categorias')->insert($data6);
        
	}
}
