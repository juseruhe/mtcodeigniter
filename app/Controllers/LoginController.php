<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Usuario;

class LoginController extends BaseController
{
	public function index()
	{
		//componentes

		$datos["navbar"] = view('layouts/landing/components/navbar');
		$datos["footer"] = view('layouts/landing/components/footer');

		return view('login/index',$datos);
	}

	public function loggedin(){
 
			//componentes

		$datos["navbar"] = view('layouts/landing/components/navbar');
		$datos["footer"] = view('layouts/landing/components/footer');

	
	

		$modelo = new Usuario();

		$datos["usuario"] = $modelo->select('usuarios.correo,usuarios.contrasena')
		->where('correo',$_POST["correo"])
		->where('contrasena',$_POST["contrasena"])
		->findAll();

		if(count($datos["usuario"]) > 0) {

			$datos["usuario"] = $modelo->select('usuarios.correo,usuarios.contrasena')
			->where('correo',$_POST["correo"])
			->where('contrasena',$_POST["contrasena"])
			->where('rol_id',1)
			->findAll();
			
			if(count($datos["usuario"]) > 0){

				return view('login/create',$datos);
				
			}

			else {

				//componentes

		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');

	 

                return view('admin/index',$datos);
			}
		}
   
		else {

			return view('login/index',$datos);
		}



		/* Login Video
		$correo = $_POST["correo"];
		$contrasena = $_POST["contrasena"];

		$usuario = new Usuario();

		$datosUsuario = $usuario->login(['correo' => $correo]);

		if(count($datosUsuario) > 0 )
		*/

	}
}
