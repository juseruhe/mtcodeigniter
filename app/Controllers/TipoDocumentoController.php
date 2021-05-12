<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\TipoDocumento;

class TipoDocumentoController extends BaseController
{
	public function index()
	{
		// Consulta

		$modelo = new TipoDocumento();

		$datos["tipos_documento"] = $modelo->findAll();

		//Componentes

		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');

		return view('tipo_documento/index',$datos);
	}

	public function create(){

		//Componentes

		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');

		return view('tipo_documento/create',$datos);
		
	}

	public function store(){

		$modelo = new TipoDocumento();

		$datos = [
			"nombre" => $_POST["nombre"],
			"siglas" => $_POST["siglas"]
		];

		$modelo->insert($datos);

		return redirect()->to(base_url().'/tipo_documento');


	}

	public function show($id){

		//Componentes

		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');

		// Consulta

		$modelo = new TipoDocumento();

		$datos["tipo_documento"] = $modelo->where('id',$id)->first();

		return view('tipo_documento/show',$datos);

	}

	public function edit($id){

		//Componentes

		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');

		// Consulta

		$modelo = new TipoDocumento();

		$datos["tipo_documento"] = $modelo->where('id',$id)->first();

		return view('tipo_documento/edit',$datos);

	}

	public function update($id){

		$modelo = new TipoDocumento();

		$datos = [
			"nombre"  => $_POST["nombre"],
			"siglas"  => $_POST["siglas"]
		];

		$modelo->where('id',$id)->update($id,$datos);

		return redirect()->to(base_url().'/tipo_documento/'.$id);
	}

	public function destroy($id){

		$modelo = new TipoDocumento();

		$modelo->where('id',$id)->delete();

		return redirect()->to(base_url().'/tipo_documento');
	}
}
