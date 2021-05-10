<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12 scroll">

<h3 class="text-center my-4 ">Materiales</h3>

<a href="<?php echo base_url()."/material/crear/" ?>" class="btn btn-primary my-4">Crear Material</a>
 
    <table class="table table-dark  text-center   ">
    <thead>
    <tr>
    <th>#</th>
    <th>Nombre</th>
    <th>Acciones</th>
    </tr>
    </thead>
    <?php
    foreach($materiales as $material)
    {
    ?>
    <tbody>
   
    <tr>
   
    <td><?php echo $material->id ?></td>
    <td><?php echo $material->nombre ?></td>
    <td>
    <a class="btn btn-info" href="<?php echo base_url().'/material/'.$material->id ?>">Mostrar</a>
    <a class="btn btn-warning" href="#">Actualizar</a>
    <a class="btn btn-danger" href="#">Eliminar</a>
    </td>
   
    </tr>
   
    </tbody>
    <?php
    }
    ?>
    </table>
    </div>
    </div>
    </div>
</body>
</html>