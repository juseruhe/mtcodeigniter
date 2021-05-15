<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\TipoDocumento;

use App\Models\Genero;

use App\Models\Rol;
use App\Models\Usuario;

class UsuarioController extends BaseController
{
	public function index()
	{
		//Consulta
        $modelo = new Usuario();
		$datos["usuarios"] = $modelo->select('')
		
		
		->findAll();

		
	}
}
