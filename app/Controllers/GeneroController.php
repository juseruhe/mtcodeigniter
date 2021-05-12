<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Genero;

class GeneroController extends BaseController
{
	public function index()
	{
		// Consulta

		$modelo = new Genero();

		$datos["generos"] = $modelo->findAll();

		//Componentes

		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');

		return view('genero/index',$datos);

	}

	public function create(){

		//Componentes

		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');

		return view('genero/create',$datos);

	}

	public function store(){

		$modelo = new Genero();

		$datos = [
			"nombre" => $_POST["nombre"]
		];

		$modelo->insert($datos);

		return redirect()->to(base_url().'/genero');
	}

	public function show($id){

			//Componentes

			$datos["navbar"] = view('layouts/admin/components/navbar');
			$datos["footer"] = view('layouts/admin/components/footer');

			// consulta

			$modelo = new Genero();

			$datos["genero"] = $modelo->where('id',$id)->first();

			return view('genero/show', $datos);


	}

	public function edit($id){

		//Componentes

		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');

		// consulta

		$modelo = new Genero();

		$datos["genero"] = $modelo->where('id',$id)->first();

		return view('genero/edit', $datos);

	}

	public function update($id){

		$modelo = new Genero();

		$datos = [
			"nombre"  => $_POST["nombre"]
		];

		$modelo->where('id',$id)->update($id,$datos);

		return redirect()->to(base_url().'/genero/'.$id);
	}

	public function destroy($id){

		$modelo = new Genero();

		$modelo->where('id',$id)->delete();


		return redirect()->to(base_url().'/genero');
	}
}
