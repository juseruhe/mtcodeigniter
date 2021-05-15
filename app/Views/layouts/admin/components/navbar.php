<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>
<body>



<!-- Navbar -->



<nav class="navbar navbar-expand-lg navbar-light bg-light" >

<ul class="navbar-nav">

<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fab fa-trade-federation"></i> Material
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo base_url()."/material" ?>">Mostrar Materiales</a>
          <a class="dropdown-item" href="<?php echo base_url()."/material/crear/" ?>">Crear Material</a>
      
        </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fab fa-trade-federation"></i> Categoría
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo base_url()."/categoria" ?>">Mostrar Categorias</a>
          <a class="dropdown-item" href="<?php echo base_url()."/categoria/crear/" ?>">Crear Categoría</a>
      
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fab fa-trade-federation"></i> Color
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo base_url()."/color" ?>">Mostrar Colores</a>
          <a class="dropdown-item" href="<?php echo base_url()."/color/crear/" ?>">Crear Color</a>
      
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fab fa-trade-federation"></i> Clasificación
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo base_url()."/clasificacion" ?>">Mostrar Clasificaciones</a>
          <a class="dropdown-item" href="<?php echo base_url()."/clasificacion/crear/" ?>">Crear Clasificación</a>
      
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fab fa-trade-federation"></i> Talla
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo base_url()."/talla" ?>">Mostrar Tallas</a>
          <a class="dropdown-item" href="<?php echo base_url()."/talla/crear/" ?>">Crear Talla</a>
      
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fab fa-trade-federation"></i> Tipo Documento
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo base_url()."/tipo_documento" ?>">Mostrar Tipos Documento</a>
          <a class="dropdown-item" href="<?php echo base_url()."/tipo_documento/crear/" ?>">Crear Tipo Documento</a>
      
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fab fa-trade-federation"></i> Género
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo base_url()."/genero" ?>">Mostrar Géneros</a>
          <a class="dropdown-item" href="<?php echo base_url()."/genero/crear/" ?>">Crear Tipo Géneros</a>
      
        </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fab fa-trade-federation"></i> País
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo base_url()."/pais" ?>">Mostrar Paises</a>
          <a class="dropdown-item" href="<?php echo base_url()."/pais/crear/" ?>">Crear País</a>
      
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fab fa-trade-federation"></i> Rol
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo base_url()."/rol" ?>">Mostrar Roles</a>
          <a class="dropdown-item" href="<?php echo base_url()."/rol/crear/" ?>">Crear Rol</a>
      
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fab fa-trade-federation"></i> Ciudad
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo base_url()."/ciudad" ?>">Mostrar Ciudades</a>
          <a class="dropdown-item" href="<?php echo base_url()."/ciudad/crear/" ?>">Crear Ciudad</a>
      
        </div>
      </li>


</ul>
</nav>