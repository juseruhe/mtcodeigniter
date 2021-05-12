<?= $navbar   ?>


<div class="container">
<div class="row">
<div class="col-md-12 scroll">

<h3 class="text-center my-4 ">Clasificaciones</h3>

<a href="<?php echo base_url().'/clasificacion/crear/' ?>" class="btn btn-primary my-4"> <i class="fas fa-plus-circle"></i>    Crear Clasificación</a>
 
    <table class="table table-dark  text-center   ">
    <thead>
    <tr>
    <th>#</th>
    <th>Nombre</th>
    <th>Acciones</th>
    </tr>
    </thead>
    <?php
    foreach($clasificaciones as $clasificacion)
    {
    ?>
    <tbody>
   
    <tr>
   
    <td><?php echo $clasificacion["id"] ?></td>
    <td><?php echo $clasificacion["nombre"] ?></td>
    <td>
    <a class="btn btn-info" href="<?php echo base_url().'/clasificacion/'.$clasificacion["id"] ?>"><i class="fas fa-eye"></i>  Mostrar</a>
    <a class="btn btn-warning" href="<?php echo base_url().'/clasificacion/editar/'.$clasificacion["id"] ?>"><i class="fas fa-edit"></i>  Actualizar</a>
    <a class="btn btn-danger" href="<?php echo base_url().'/clasificacion/eliminar/'.$clasificacion["id"] ?>"><i class="fas fa-eraser"></i>   Eliminar</a>
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