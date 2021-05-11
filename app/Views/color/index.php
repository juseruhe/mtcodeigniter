<?= $navbar   ?>


<div class="container">
<div class="row">
<div class="col-md-12 scroll">

<h3 class="text-center my-4 ">Colores</h3>

<a href="#" class="btn btn-primary my-4"> <i class="fas fa-plus-circle"></i>    Crear Color</a>
 
    <table class="table table-dark  text-center   ">
    <thead>
    <tr>
    <th>#</th>
    <th>Nombre</th>
    <th>Acciones</th>
    </tr>
    </thead>
    <?php
    foreach($colores as $color)
    {
    ?>
    <tbody>
   
    <tr>
   
    <td><?php echo $color["id"] ?></td>
    <td><?php echo $color["nombre"] ?></td>
    <td>
    <a class="btn btn-info" href="<?php echo base_url().'/color/'.$color["id"] ?>"><i class="fas fa-eye"></i>  Mostrar</a>
    <a class="btn btn-warning" href="#"><i class="fas fa-edit"></i>  Actualizar</a>
    <a class="btn btn-danger" href="#"><i class="fas fa-eraser"></i>   Eliminar</a>
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

<?= $footer ?>