<?= $navbar   ?>


<div class="container">
<div class="row">
<div class="col-md-12 scroll">

<h3 class="text-center my-4 ">Tipo de Documento</h3>

<a href="<?php echo base_url().'/tipo_documento/crear' ?>" class="btn btn-primary my-4"> <i class="fas fa-plus-circle"></i>    Crear Tipos de Documento</a>
 
    <table class="table table-dark  text-center   ">
    <thead>
    <tr>
    <th>#</th>
    <th>Nombre</th>
    <th>Siglas</th>
    <th>Acciones</th>
    </tr>
    </thead>
    <?php
    foreach($tipos_documento as $tipo_documento)
    {
    ?>
    <tbody>
   
    <tr>
   
    <td><?php echo $tipo_documento['id'] ?></td>
    <td><?php echo $tipo_documento['nombre'] ?></td>
    <td><?php echo $tipo_documento['siglas'] ?></td>
    <td>
    <a class="btn btn-info" href="<?php echo base_url().'/tipo_documento/'.$tipo_documento["id"] ?>"><i class="fas fa-eye"></i>  Mostrar</a>
    <a class="btn btn-warning" href="<?php echo base_url().'/tipo_documento/editar/'.$tipo_documento["id"] ?>"> <i class="fas fa-edit"></i>  Actualizar</a>
    <a class="btn btn-danger" href="<?php echo base_url().'/tipo_documento/eliminar/'.$tipo_documento["id"] ?>"> <i class="fas fa-eraser"></i>   Eliminar</a>
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