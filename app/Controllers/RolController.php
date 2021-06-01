<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Rol;

class RolController extends BaseController
{
	public function index()
	{
		// Consulta
		$modelo = new Rol();
        $datos["roles"] = $modelo->findAll();

		//Componentes
		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');

		return view('rol/index',$datos);
	}

	public function create(){

		//Componentes
		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');

		return view('rol/create',$datos);

	}

	public function store(){

		$modelo = new Rol();

		$datos = [
			"nombre" => $_POST["nombre"]
		];

		$modelo->insert($datos);

		return redirect()->to(base_url().'/rol')->with('mensaje','Creado Correctamente');
	}

	public function show($id){

			//Componentes
			$datos["navbar"] = view('layouts/admin/components/navbar');
			$datos["footer"] = view('layouts/admin/components/footer');

			//consulta
			$modelo = new Rol();

			$datos["rol"] = $modelo->where('id',$id)->first();

			return view('rol/show',$datos);

	}

	public function edit($id){

		//Componentes
		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');

		//consulta
		$modelo = new Rol();

		$datos["rol"] = $modelo->where('id',$id)->first();

		return view('rol/edit',$datos);
	}

	public function update($id){

		$modelo = new Rol();

		$datos = [
			"nombre" => $_POST["nombre"]
		];

		$modelo->where('id',$id)->update($id,$datos);

		return redirect()->to(base_url().'/rol/'.$id);
	}

	public function destroy($id){

		$modelo = new Rol();

		$modelo->where('id',$id)->delete();

		return redirect()->to(base_url().'/rol')->with('mensaje','Eliminado Correctamente');
	}
}
