<?= $navbar   ?>


<div class="container">
<div class="row">
<div class="col-md-12 scroll">

<h3 class="text-center my-4 ">Materiales</h3>

<a href="<?php echo base_url()."/material/crear/" ?>" class="btn btn-primary my-4"> <i class="fas fa-plus-circle"></i>    Crear Material</a>
 
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
   
    <td><?php echo $material['id'] ?></td>
    <td><?php echo $material['nombre'] ?></td>
    <td>
    <a class="btn btn-info" href="<?php echo base_url().'/material/'.$material['id'] ?>"><i class="fas fa-eye"></i>  Mostrar</a>
    <a class="btn btn-warning" href="<?php echo base_url().'/material/editar/'.$material['id'] ?>"> <i class="fas fa-edit"></i>  Actualizar</a>
    <a class="btn btn-danger" href="<?php echo base_url().'/material/eliminar/'.$material['id'] ?>"> <i class="fas fa-eraser"></i>   Eliminar</a>
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