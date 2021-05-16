<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Ciudad;
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


	public function create(){

		//componentes

		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');

		// Consultas

		$modelo = new TipoDocumento();
        $datos["tipos_documento"] = $modelo->findAll();

		$modelo2 = new Genero();
        $datos["generos"] = $modelo2->findAll();

		$modelo3 = new Rol();
		$datos["roles"] = $modelo3->findAll();

		$modelo4 = new Ciudad();
		$datos["ciudades"] = $modelo4->findAll();


		return view('usuario/create',$datos);

	}


	public function store(){

		$modelo = new Usuario();

		$datos = [
			'tipo_documento_id' => $_POST["tipo_documento_id"],
					'numero_documento' => $_POST["numero_documento"],
					'nombres' => $_POST["nombres"],
					'apellidos' => $_POST["apellidos"],
					'genero_id' => $_POST["genero_id"],
					'fecha_nacimiento' => $_POST["fecha_nacimiento"],
					'correo' => $_POST["correo"],
					'contrasena' => $_POST["contrasena"],
					'direccion' => $_POST["direccion"],
					'telefono' => $_POST["telefono"],
					'rol_id' => $_POST["rol_id"],
					'ciudad_id' => $_POST["ciudad_id"]
		];

		$modelo->insert($datos);


		return redirect()->to(base_url().'/usuario');


	}

	public function show($id){

			//componentes

			$datos["navbar"] = view('layouts/admin/components/navbar');
			$datos["footer"] = view('layouts/admin/components/footer');
	 
			//Consulta

			$modelo = new Usuario();

			$datos["usuario"] = $modelo->select('usuarios.id,usuarios.tipo_documento_id,
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
		->where('usuarios.id',$id)
		->first();


		return view('usuario/show',$datos);
}

public function edit($id){

		//componentes

		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');
 
		//Consulta

		$modelo = new Usuario();

		$datos["usuario"] = $modelo->select('usuarios.id,usuarios.tipo_documento_id,
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
	->where('usuarios.id',$id)
	->first();

	// Consultas Tablas Fuertes

	$modelo2 = new TipoDocumento();
        $datos["tipos_documento"] = $modelo2->findAll();

		$modelo3 = new Genero();
        $datos["generos"] = $modelo3->findAll();

		$modelo4 = new Rol();
		$datos["roles"] = $modelo4->findAll();

		$modelo5 = new Ciudad();
		$datos["ciudades"] = $modelo5->findAll();




	return view('usuario/edit',$datos);


}

public function update($id){

	$modelo = new Usuario();

		$datos = [
			'tipo_documento_id' => $_POST["tipo_documento_id"],
					'numero_documento' => $_POST["numero_documento"],
					'nombres' => $_POST["nombres"],
					'apellidos' => $_POST["apellidos"],
					'genero_id' => $_POST["genero_id"],
					'fecha_nacimiento' => $_POST["fecha_nacimiento"],
					'correo' => $_POST["correo"],
					'contrasena' => $_POST["contrasena"],
					'direccion' => $_POST["direccion"],
					'telefono' => $_POST["telefono"],
					'rol_id' => $_POST["rol_id"],
					'ciudad_id' => $_POST["ciudad_id"]
		];

		$modelo->where('id',$id)->update($id,$datos);


		return redirect()->to(base_url().'/usuario/'.$id);


}

public function destroy($id){

	$modelo = new Usuario();

	$modelo->where('id',$id)->delete();

	return redirect()->to(base_url().'/usuario');


}


}
