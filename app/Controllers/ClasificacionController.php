<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Clasificacion;

class ClasificacionController extends BaseController
{
	public function index()
	{
		//Consulta

		$modelo = new Clasificacion();

		$datos["clasificaciones"] = $modelo->findAll();

		//Componentes

		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');

		return view('clasificacion/index', $datos);

	}

	public function create(){

			//Componentes

			$datos["navbar"] = view('layouts/admin/components/navbar');
			$datos["footer"] = view('layouts/admin/components/footer');


			return view('clasificacion/create',$datos);


	}


	public function store(){

		$modelo = new Clasificacion();

		$datos = [
			"nombre" => $_POST["nombre"]
		];

		$modelo->insert($datos);

		return redirect()->to(base_url().'/clasificacion');
	}

	public function show($id){
		//Componentes

		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');

		// Consulta
		$modelo = new Clasificacion();

		$datos["clasificacion"] = $modelo->where('id',$id)->first();

		return view('clasificacion/show',$datos);
		
	}

	public function edit($id){

			//Componentes

			$datos["navbar"] = view('layouts/admin/components/navbar');
			$datos["footer"] = view('layouts/admin/components/footer');
	
				// Consulta
		$modelo = new Clasificacion();

		$datos["clasificacion"] = $modelo->where('id',$id)->first();

		return view('clasificacion/edit', $datos);


	}

	public function update($id){

		$modelo = new Clasificacion();

		$datos = [
			"nombre" => $_POST["nombre"]
		];

		$modelo->where('id',$id)->update($id,$datos);

		return redirect()->to(base_url().'/clasificacion/'.$id);
	}


	public function destroy($id){

		$modelo = new Clasificacion();

		$modelo->where('id',$id)->delete();

		return redirect()->to(base_url().'/clasificacion');
	}
}
