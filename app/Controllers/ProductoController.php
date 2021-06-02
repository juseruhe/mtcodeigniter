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
	tallas.nombre talla,colores.nombre color,materiales.nombre material,categorias.nombre categoria,
	clasificaciones.nombre clasificacion,productos.valor,productos.cantidad")
    ->join('tallas','productos.talla_id=tallas.id','inner')
	->join('colores','productos.color_id=colores.id','inner')
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

        $modelo2 = new Color();

		$datos["colores"] = $modelo2->findAll();

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

		return redirect()->to(base_url().'/producto')->with('mensaje','Creado Correctamente');

		 
	}

	public function show($id){

			// Consulta
			$modelo = new Producto();

			$datos["producto"] = $modelo->select("productos.id,productos.nombre,productos.imagen,
			tallas.nombre talla,colores.nombre color,materiales.nombre material,categorias.nombre categoria,
			clasificaciones.nombre clasificacion,productos.valor,productos.cantidad")
			->join('tallas','productos.talla_id=tallas.id','inner')
			->join('colores','productos.color_id=colores.id','inner')
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
		tallas.nombre talla,colores.nombre color,materiales.nombre material,categorias.nombre categoria,
		clasificaciones.nombre clasificacion,productos.valor,productos.cantidad,productos.talla_id,
		productos.material_id,productos.color_id,productos.categoria_id,productos.clasificacion_id")
		->join('tallas','productos.talla_id=tallas.id','inner')
		->join('colores','productos.color_id=colores.id','inner')
		->join('materiales','productos.material_id=materiales.id','inner')
		->join('categorias','productos.categoria_id=categorias.id','inner')
		->join('clasificaciones','productos.clasificacion_id=clasificaciones.id','inner')
		->where('productos.id',$id)
		->first();

		// Consulta Tablas Fuertes
		$modelo1 = new Talla();

		$datos["tallas"] = $modelo1->findAll();

        $modelo2 = new Color();

		$datos["colores"] = $modelo2->findAll();

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
}
