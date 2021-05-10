<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Material;

class MaterialController extends BaseController
{


	
	public function index()
	{
		$modelo = new Material();

		$consulta= $modelo->listarMateriales();

		$datos = [
			"materiales" => $consulta
		];
		

		return view('material/index',$datos);
	}

	public function create(){
		return view('material/create');
	}

	public function store(){

$datos = [
			
		"nombre"  => $_POST["nombre"]
			
		];

		$crud = new Material();

		$consulta = $crud->crearMaterial($datos);

		return redirect()->to(base_url().'/material');

	}

   public function show($id){

	$modelo = new Material();

	$consulta = $modelo->mostrarMaterial($id);

	$datos = [

		"materiales"  => $consulta
	];


	return view('material/show', $datos);


   }

	
	

	



}
