<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <h3>Crear Material</h3>


    <form action="<?php echo base_url().'/MaterialController/store' ?>" method="POST">

    <label for="nombre">Nombre de Material:</label>
    <input type="text" name="nombre" >
    
    <input class="btn btn-success" type="submit" value="Insertar Material">
    </form>
    
</body>
</html>