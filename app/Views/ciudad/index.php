<?= $navbar   ?>



<div class="container">
<div class="row">
<div class="col-md-12 scroll">

<h3 class="text-center my-4 ">Ciudades</h3>

<!-- Alerta -->
<?php 
if(session('mensaje') == "Creado Correctamente") {
?>
<div class="alert alert-success" role="alert">
<i class="fas fa-check-square"></i> <?php echo session('mensaje') ?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close" >
<span aria-hidden="true">&times;</span>
</button>
</div>
<?php
}
else if(session('mensaje') == "Eliminado Correctamente"){
?>
<div class="alert alert-danger" role="alert">
<i class="fas fa-times-check"></i> <?php echo session('mensaje') ?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close" >
<span aria-hidden="true">&times;</span>
</button>
</div>
<?php
}else {
}
?>
<!-- Fín de Alerta  -->

<a href="<?php echo base_url().'/ciudad/crear' ?>" class="btn btn-primary my-4"> <i class="fas fa-plus-circle"></i>    Crear Ciudad</a>
 
    <table class="table table-dark  text-center   ">
    <thead>
    <tr>
    <th>#</th>
    <th>Nombre</th>
    <th>País</th>
    <th>Acciones</th>
    </tr>
    </thead>
    <?php
    foreach($ciudades as $ciudad)
    {
        
    ?>
    <tbody>
   
    <tr>
   
    <td><?php echo $ciudad["id"] ?></td>
    <td><?php echo $ciudad["nombre"] ?></td>
    <td><?php echo $ciudad["pais"] ?></td>
    <td>
    <a class="btn btn-info" href="<?php echo base_url().'/ciudad/'.$ciudad["id"] ?>"><i class="fas fa-eye"></i>  Mostrar</a>
    <a class="btn btn-warning" href="<?php echo base_url().'/ciudad/editar/'.$ciudad["id"] ?>"><i class="fas fa-edit"></i>  Actualizar</a>
    <a class="btn btn-danger" href="<?php echo base_url().'/ciudad/eliminar/'.$ciudad["id"] ?>"><i class="fas fa-eraser"></i>   Eliminar</a>
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