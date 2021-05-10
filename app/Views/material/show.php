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
    <h3 class="text-center my-4 ">Datos del Material</h3>


 
    <table class="table table-dark  text-center ">
    <thead>
    <tr>
    <th>#</th>
    <th>Nombre</th>
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
   
   
    </tr>
   
    </tbody>
    <?php
    }
    ?>
    </table>
</body>
</html>