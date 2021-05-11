<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Color;

class ColorController extends BaseController
{
	public function index()
	{
		// Consulta

		$modelo = new Color();

		$datos["colores"] = $modelo->findAll();

		// Componentes
		$datos['navbar'] = view('layouts/admin/components/navbar');
		
		$datos['footer'] = view('layouts/admin/components/footer');


		return view('color/index',$datos);
	}


	public function create(){

		// Componentes
		$datos['navbar'] = view('layouts/admin/components/navbar');
		
		$datos['footer'] = view('layouts/admin/components/footer');

        return view('color/create',$datos);
	}

	public function store(){

		$modelo = new Color();

		$datos = [
			"nombre"  => $_POST["nombre"]
		];

		$modelo->insert($datos);

		return redirect()->to(base_url().'/color');
	}

	public function show($id){

		$modelo = new Color();

		$datos["color"] = $modelo->where('id',$id)->first();

		// Componentes
		$datos['navbar'] = view('layouts/admin/components/navbar');
		
		$datos['footer'] = view('layouts/admin/components/footer');

		return view('color/show', $datos);

	}
}
