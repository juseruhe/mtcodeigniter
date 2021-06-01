<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Categoria;

class CategoriaController extends BaseController
{
	public function index()
	{

       // Componentes

	   $datos["navbar"] = view('layouts/admin/components/navbar');

	   $datos["footer"] = view('layouts/admin/components/footer');

      // Consulta
		$modelo = new Categoria();

		$datos["categorias"] = $modelo->findAll();


      return view('categoria/index',$datos);

	}

	public function create(){

		   // Componentes

		   $datos["navbar"] = view('layouts/admin/components/navbar');

		   $datos["footer"] = view('layouts/admin/components/footer');


		   return view('categoria/create',$datos);

	}

	public function store(){

	$modelo = new Categoria();

	$datos = [ 
		"nombre"  => $_POST["nombre"]
	];


	$modelo->insert($datos);


	return redirect()->to(base_url().'/categoria')->with('mensaje','Creado Correctamente');


	}

	public function show($id){

		  // Componentes

		  $datos["navbar"] = view('layouts/admin/components/navbar');

		  $datos["footer"] = view('layouts/admin/components/footer');


		  // Consulta

		  $modelo = new Categoria();

		  $datos["categoria"] = $modelo->where('id',$id)->first();


		  return view('categoria/show',$datos);



	}
	

	public function edit($id){

		 // Componentes

		 $datos["navbar"] = view('layouts/admin/components/navbar');

		 $datos["footer"] = view('layouts/admin/components/footer');


		 // Consulta

		 $modelo = new Categoria();

		 $datos["categoria"] = $modelo->where('id',$id)->first();


		 return view('categoria/edit',$datos);



	}


	public function update($id){

		$modelo = new Categoria();

		$datos = [
			"nombre" => $_POST["nombre"]
		];

		$modelo->update($id,$datos);


		return redirect()->to(base_url().'/categoria/'.$id);


	}

	public function destroy($id){

       $modelo = new Categoria();

	   $modelo->where('id',$id)->delete();

	   return redirect()->to(base_url().'/categoria')->with('mensaje','Eliminado Correctamente');


	}


}
