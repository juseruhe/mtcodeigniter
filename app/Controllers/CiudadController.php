<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Ciudad;

use App\Models\Pais;

class CiudadController extends BaseController
{
	public function index()
	{
		//Consultas
        $modelo = new Ciudad();

		$datos["ciudades"] = $modelo->select('ciudades.id,ciudades.nombre,paises.nombre pais')
		->join('paises','ciudades.pais_id=paises.id','INNER')
		->findAll();
		
		
		

		//Componentes
		$datos["navbar"]= view('layouts/admin/components/navbar');
		$datos["footer"]= view('layouts/admin/components/footer');

		return view('ciudad/index',$datos);
	}

	public function create(){

         //Consulta

		 $modelo = new Pais();

         $datos["paises"] = $modelo->findAll();

			//Componentes
			$datos["navbar"]= view('layouts/admin/components/navbar');
			$datos["footer"]= view('layouts/admin/components/footer');
	
			return view('ciudad/create',$datos);

	}

	public function store(){

		$modelo = new Ciudad();

		$datos = [
			"nombre"  => $_POST["nombre"],
			"pais_id"  => $_POST["pais_id"]
		];

		$modelo->insert($datos);

		return redirect()->to(base_url().'/ciudad')->with('mensaje','Creado Correctamente');
	}

	public function show($id){

			//Componentes
			$datos["navbar"]= view('layouts/admin/components/navbar');
			$datos["footer"]= view('layouts/admin/components/footer');

			//Consulta

			$modelo = new Ciudad();

			$datos["ciudad"] = $modelo->select('ciudades.id,ciudades.nombre,paises.nombre pais,ciudades.pais_id')
			->join('paises','ciudades.pais_id=paises.id','inner')
			->where('ciudades.id',$id)
			->first();


			return view('ciudad/show',$datos);
			

	}

	public function edit($id){

			//Componentes
			$datos["navbar"]= view('layouts/admin/components/navbar');
			$datos["footer"]= view('layouts/admin/components/footer');

			//Consulta

			$modelo = new Ciudad();

			$datos["ciudad"] = $modelo->select('ciudades.id,ciudades.nombre,paises.nombre pais, ciudades.pais_id')
			->join('paises','ciudades.pais_id=paises.id','inner')
			->where('ciudades.id',$id)
			->first();

			// consulta de País

		    $modelo2 = new Pais();

			$datos["paises"] = $modelo2->findAll();


			return view('ciudad/edit',$datos);
			

	}

	public function update($id){

		$modelo = new Ciudad();

		$datos = [
			"nombre"  => $_POST["nombre"],
			"pais_id" => $_POST["pais_id"]
		];

		$modelo->where('id',$id)->update($id,$datos);

		return redirect()->to(base_url().'/ciudad/'.$id);
	}

	public function destroy($id){

		$modelo = new Ciudad();

		$modelo->where('id',$id)->delete();

		return redirect()->to(base_url().'/ciudad')->with('mensaje','Eliminado Correctamente');
	}
}
