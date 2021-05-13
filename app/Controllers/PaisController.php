<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Pais;

class PaisController extends BaseController
{
	public function index()
	{
		//Consulta

		$modelo = new Pais();

		$datos["paises"] = $modelo->findAll();

		// Componentes

		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');

		return view('pais/index', $datos);
	}

	public function create(){

		// Componentes

		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');

		return view('pais/create', $datos);

	}

	public function store(){

		$modelo = new Pais();

		$datos = [
			"nombre"  => $_POST["nombre"]
		];

		$modelo->insert($datos);

		return redirect()->to(base_url().'/pais');
	}

	public function show($id){

		// Componentes

		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');

		$modelo = new Pais();

		$datos["pais"] = $modelo->where('id',$id)->first();

		return view('pais/show',$datos);


	}

	public function edit($id){

			// Componentes

			$datos["navbar"] = view('layouts/admin/components/navbar');
			$datos["footer"] = view('layouts/admin/components/footer');
	
			$modelo = new Pais();
	
			$datos["pais"] = $modelo->where('id',$id)->first();
	
			return view('pais/edit',$datos);
	}


	public function update($id){

		$modelo = new Pais();

		$datos = [
			"nombre" =>$_POST["nombre"]
		];

		$modelo->where('id',$id)->update($id,$datos);


		return redirect()->to(base_url().'/pais/'.$id);

	}

	public function destroy($id){

		$modelo = new Pais();

		$modelo->where('id',$id)->delete();

		return redirect()->to(base_url().'/pais');
	}
}
