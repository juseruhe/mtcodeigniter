<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Usuario;

class AdminController extends BaseController
{
	public function index()
	{

		// Componentes

		$datos["navbar"] = view('layouts/admin/components/navbar');
		$datos["footer"] = view('layouts/admin/components/footer');

		
		return view('admin/index',$datos);
		
	}
}
