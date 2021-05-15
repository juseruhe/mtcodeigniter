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
		$datos["usuarios"] = $modelo->select('usuarios.id,usuarios.tipo_documento_id,
		usuarios.numero_documento,usuarios.nombres,
		usuarios.apellidos,usuarios.genero_id,usuarios.fecha_nacimiento,
		usuarios.correo,usuarios.contrasena,
		usuarios.direccion,usuarios.telefono,usuarios.rol_id,usuarios.ciudad_id,
		tipos_documento.nombre tipo_documento, generos.nombre genero,
		roles.nombre rol, ciudades.nombre ciudad')
		->join('tipos_documento','usuarios.tipo_documento_id=
		tipos_documento.id','inner')
		->join('generos','usuarios.genero_id=generos.id','inner')
		->join('roles','usuarios.rol_id=roles.id','inner')
		->join('ciudades','usuarios.ciudad_id=ciudades.id','inner')
		->findAll();

		//componentes

		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');

		return view('usuario/index',$datos);
		
	}
}
