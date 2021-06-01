<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Material;

class MaterialController extends BaseController
{


	
	public function index()
	{

		// Consulta
		$modelo = new Material();

		$datos['materiales']= $modelo->findAll();


		// Componentes
		$datos['navbar'] = view('layouts/admin/components/navbar');
		
		$datos['footer'] = view('layouts/admin/components/footer');

		return view('material/index',$datos);
		
	}




	public function create(){


		// Componentes
		$datos['navbar'] = view('layouts/admin/components/navbar');
		
		$datos['footer'] = view('layouts/admin/components/footer');


		return view('material/create', $datos);
	}

	public function store(){

		$crud = new Material();

$datos = [
			
		"nombre"  => $_POST["nombre"]
			
		];

		
		$crud->insert($datos);


		return redirect()->to(base_url().'/material')->with('mensaje','Creado Correctamente');

	}

 public function show($id){

$crud = new Material();

// Componentes
$datos['navbar'] = view('layouts/admin/components/navbar');
		
$datos['footer'] = view('layouts/admin/components/footer');


$datos['material'] = $crud->where('id',$id)->first();


return view('material/show',$datos);


 }

 public function edit($id){

	$crud = new Material();
	
	// Componentes
	$datos['navbar'] = view('layouts/admin/components/navbar');
			
	$datos['footer'] = view('layouts/admin/components/footer');
	
	
	$datos['material'] = $crud->where('id',$id)->first();
	
	
	return view('material/edit',$datos);
	
	
	 }

	 public function update($id){

    $crud = new Material();

	$datos = [
			
		"nombre"  => $_POST["nombre"]
			
		];


		$crud->update($id,$datos);


		return redirect()->to(base_url().'/material/'.$id);



	 }





   public function destroy($id){

	$crud = new Material();

	$crud->where('id',$id)->delete();

    return redirect()->to(base_url().'/material')
	->with('mensaje','Eliminado Correctamente');

   }

	
	

	



}
