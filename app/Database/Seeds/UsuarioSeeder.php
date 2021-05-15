<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioSeeder extends Seeder
{
	public function run()
	{
	   
	
			$data = ['tipo_documento_id' => '1',
			'numero_documento' => '10101010',
			'nombres' => 'Juan Sebastian',
			'apellidos' => 'Ruiz Herrera',
			'genero_id' => '1',
			'fecha_nacimiento' => '1998-05-15',
			'correo' => 'jsruiz7411@misena.edu.co',
			'contrasena' => '123',
			'direccion' => 'Calle Usme',
			'telefono' => '3115133173',
			'rol_id' => '1'];
			
	
		
				$data2 = ['tipo_documento_id' => '1',
				'numero_documento' => '50505050',
				'nombres' => 'Andres Felipe',
				'apellidos' => 'Ospina Castro',
				'genero_id' => '1',
				'fecha_nacimiento' => '2000-07-14',
				'correo' => 'afospina93@misena.edu.co',
				'contrasena' => '123',
				'direccion' => 'Carrera 80',
				'telefono' => '3124845032',
				'rol_id' => '1'];
				
	
			
					$data3 = ['tipo_documento_id' => '1',
					'numero_documento' => '30303030',
					'nombres' => 'Marco Aurelio',
					'apellidos' => 'Espinosa Castro',
					'genero_id' => '1',
					'fecha_nacimiento' => '1998-05-15',
					'correo' => 'maespinosa@misena.edu.co',
					'contrasena' => '123',
					'direccion' => 'Avenida Calabera',
					'telefono' => '3174483117',
					'rol_id' => '1'];

					$this->db->table('usuarios')->insert($data);
		   $this->db->table('usuarios')->insert($data2);
		   $this->db->table('usuarios')->insert($data3);
					
	}
}
