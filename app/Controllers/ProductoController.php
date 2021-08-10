<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Color;

use App\Models\Material;

use App\Models\Categoria;

use App\Models\Clasificacion;

use App\Models\Talla;

use App\Models\Producto;

class ProductoController extends BaseController
{
	public function index()
	{
		
		// Consulta
    $modelo = new Producto();

    $datos["productos"] = $modelo->select("productos.id,productos.nombre,productos.imagen,
	tallas.nombre talla,productos.color,materiales.nombre material,categorias.nombre categoria,
	clasificaciones.nombre clasificacion,productos.valor,productos.cantidad")
    ->join('tallas','productos.talla_id=tallas.id','inner')
	->join('materiales','productos.material_id=materiales.id','inner')
	->join('categorias','productos.categoria_id=categorias.id','inner')
	->join('clasificaciones','productos.clasificacion_id=clasificaciones.id','inner')
	->findAll();


	// Componentes

	$datos["navbar"] = view('layouts/admin/components/navbar');
	$datos["footer"] = view('layouts/admin/components/footer');


	return view('producto/index',$datos);

	}

	public function create(){

		//Consultas

		$modelo = new Talla();

		$datos["tallas"] = $modelo->findAll();


		$modelo3 = new Material();

		$datos["materiales"] = $modelo3->findAll();

        $modelo4 = new Categoria();

		$datos["categorias"] = $modelo4->findAll();

		$modelo5 = new Clasificacion();

		$datos["clasificaciones"] = $modelo5->findAll();



			// Componentes

	$datos["navbar"] = view('layouts/admin/components/navbar');
	$datos["footer"] = view('layouts/admin/components/footer');


	return view('producto/create',$datos);


	}

	public function store(){

		
		$modelo = new Producto();

		if($_FILES["imagen"] ["name"] != null)

		{

			// Caracterés
			$caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

		  $imagen = substr(str_shuffle($caracteres),0,15).'.jpg';

		  //copy($_FILES["imagen"]["tmp_name"],"../public/imagenes/".$_FILES["imagen"]["name"]);
			move_uploaded_file($_FILES["imagen"]["tmp_name"],"../public/imagenes/".$imagen);


		  
			
        $datos = [
			'nombre' =>  $_POST["nombre"],
            'imagen' =>  $imagen,
			'talla_id' => $_POST["talla_id"],
			'color' => $_POST["color"],
			'material_id' => $_POST["material_id"],
			'categoria_id' => $_POST["categoria_id"],
			'clasificacion_id' => $_POST["clasificacion_id"],
			'valor' => $_POST["valor"],
			'cantidad' => $_POST["cantidad"]
		];

		$modelo->insert($datos);

	}

	else {

		$datos = [
			'nombre' =>  $_POST["nombre"],
			'talla_id' => $_POST["talla_id"],
			'color_id' => $_POST["color_id"],
			'material_id' => $_POST["material_id"],
			'categoria_id' => $_POST["categoria_id"],
			'clasificacion_id' => $_POST["clasificacion_id"],
			'valor' => $_POST["valor"],
			'cantidad' => $_POST["cantidad"]
		];

		$modelo->insert($datos);

	}

		return redirect()->to(base_url().'/producto')->with('mensaje','Creado Correctamente');

		 
	}

	public function show($id){

			// Consulta
			$modelo = new Producto();

			$datos["producto"] = $modelo->select("productos.id,productos.nombre,productos.imagen,
			tallas.nombre talla,productos.color,materiales.nombre material,categorias.nombre categoria,
			clasificaciones.nombre clasificacion,productos.valor,productos.cantidad")
			->join('tallas','productos.talla_id=tallas.id','inner')
			->join('materiales','productos.material_id=materiales.id','inner')
			->join('categorias','productos.categoria_id=categorias.id','inner')
			->join('clasificaciones','productos.clasificacion_id=clasificaciones.id','inner')
			->where('productos.id',$id)
			->first();
		
		
			// Componentes
		
			$datos["navbar"] = view('layouts/admin/components/navbar');
			$datos["footer"] = view('layouts/admin/components/footer');
		
		
			return view('producto/show',$datos);

	}

	public function edit($id){

		// Consulta
		$modelo = new Producto();

		$datos["producto"] = $modelo->select("productos.id,productos.nombre,productos.imagen,
		tallas.nombre talla,productos.color,materiales.nombre material,categorias.nombre categoria,
		clasificaciones.nombre clasificacion,productos.valor,productos.cantidad,productos.talla_id,
		productos.material_id,productos.categoria_id,productos.clasificacion_id")
		->join('tallas','productos.talla_id=tallas.id','inner')
		->join('materiales','productos.material_id=materiales.id','inner')
		->join('categorias','productos.categoria_id=categorias.id','inner')
		->join('clasificaciones','productos.clasificacion_id=clasificaciones.id','inner')
		->where('productos.id',$id)
		->first();

		// Consulta Tablas Fuertes
		$modelo1 = new Talla();

		$datos["tallas"] = $modelo1->findAll();

   

		$modelo3 = new Material();

		$datos["materiales"] = $modelo3->findAll();

        $modelo4 = new Categoria();

		$datos["categorias"] = $modelo4->findAll();

		$modelo5 = new Clasificacion();

		$datos["clasificaciones"] = $modelo5->findAll();

	
	
		// Componentes
	
		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');
	
	
		return view('producto/edit',$datos);


	}

	public function update($id){

		$modelo = new Producto();

		if($_FILES["imagen"]["name"] != null)  {

			// Caracterés
			$caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

		  $imagen = substr(str_shuffle($caracteres),0,15).'.jpg';

		  //copy($_FILES["imagen"]["tmp_name"],"../public/imagenes/".$_FILES["imagen"]["name"]);
			move_uploaded_file($_FILES["imagen"]["tmp_name"],"../public/imagenes/".$imagen);

		
        $datos = [
			'nombre' =>  $_POST["nombre"],
			'imagen'  => $imagen,
			'talla_id' => $_POST["talla_id"],
			'color' => $_POST["color"],
			'material_id' => $_POST["material_id"],
			'categoria_id' => $_POST["categoria_id"],
			'clasificacion_id' => $_POST["clasificacion_id"],
			'valor' => $_POST["valor"],
			'cantidad' => $_POST["cantidad"]
		];

		$modelo->where('id',$id)->update($id,$datos);
	}

	else {

		$datos = [
			'nombre' =>  $_POST["nombre"],
			'talla_id' => $_POST["talla_id"],
			'color_id' => $_POST["color_id"],
			'material_id' => $_POST["material_id"],
			'categoria_id' => $_POST["categoria_id"],
			'clasificacion_id' => $_POST["clasificacion_id"],
			'valor' => $_POST["valor"],
			'cantidad' => $_POST["cantidad"]
		];

		$modelo->where('id',$id)->update($id,$datos);


	}
		


		return redirect()->to(base_url().'/producto/'.$id);


	}

	public function destroy($id){

	   $modelo = new Producto();

	   $modelo->where('id',$id)->delete();

	   return redirect()->to(base_url().'/producto')->with('mensaje','Eliminado Correctamente');
	}
}
