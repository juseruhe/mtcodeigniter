<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Talla;

class TallaController extends BaseController
{
	public function index()
	{
		// Consulta
		$modelo = new Talla();

		$datos["tallas"] = $modelo->findAll();

		//Componentes

		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');


		return view('talla/index',$datos);

	}

	public function create(){

		//Componentes

		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');


		return view('talla/create',$datos);


	}

	public function store(){

		$modelo = new Talla();

		$datos = [
			"nombre" => $_POST["nombre"]
		];

		$modelo->insert($datos);


		return redirect()->to(base_url().'/talla');

		
	}

	public function show($id){

		//Componentes

		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');

		// Consulta

       $modelo = new Talla();

	   $datos["talla"] = $modelo->where('id',$id)->first();

	   return view('talla/show',$datos);


	}

	public function edit($id){

			//Componentes

			$datos["navbar"] = view('layouts/admin/components/navbar');
			$datos["footer"] = view('layouts/admin/components/footer');
	
			// Consulta
	
		   $modelo = new Talla();
	
		   $datos["talla"] = $modelo->where('id',$id)->first();
	
		   return view('talla/edit',$datos);

	}

	public function update($id){

		$modelo = new Talla();

		$datos = [
			"nombre"  => $_POST["nombre"]
		];

		$modelo->where('id',$id)->update($id,$datos);

		return redirect()->to(base_url().'/talla/'.$id);
 
	}

	public function destroy($id){

		$modelo = new Talla();

		$modelo->where('id',$id)->delete();

		return redirect()->to(base_url().'/talla');
	}

	
}
