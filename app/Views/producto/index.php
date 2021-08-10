<?= $navbar   ?>


<div class="container">
<div class="row">
<div class="col-md-12 scroll">

<h3 class="text-center my-4 ">Productos</h3>

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

<a href="<?php echo base_url().'/producto/crear'?>" class="btn btn-primary my-4"> <i class="fas fa-plus-circle"></i>    Crear Producto</a>
 
    <table class="table table-dark  text-center   ">
    <thead>
    <tr>
    <th>#</th>
    <th>Nombre</th>
    <th>Imagén</th>
    <th>Talla</th>
    <th>Color</th>
    <th>Material</th>
    <th>Categoría</th>
    <th>Clasificación</th>
    <th>Valor</th>
    <th>Cantidad</th>
    <th>Acciones</th>
    </tr>
    </thead>
    <?php
    foreach($productos as $producto)
    {
    ?>
    <tbody>
   
    <tr>
   
    <td><?php echo $producto['id'] ?></td>
    <td><?php echo $producto['nombre'] ?></td>
    <td><img src="../imagenes/<?php echo $producto["imagen"] ?>" alt="<?php echo  $producto['nombre'] ?>" height="100" width="100"></td>
    <td><?php echo $producto['talla'] ?></td>
    <td> <input type="color" value="<?php echo $producto['color'] ?>" disabled> </td>
    <td><?php echo $producto['material'] ?></td>
    <td><?php echo $producto['categoria'] ?></td>
    <td><?php echo $producto['clasificacion'] ?></td>
    <td><?php echo $producto['valor'] ?></td>
    <td><?php echo $producto['cantidad'] ?></td>
    <td>
    <a class="btn btn-info" href="<?php echo base_url().'/producto/'.$producto["id"] ?>"><i class="fas fa-eye"></i>  Mostrar</a>
    <a class="btn btn-warning" href="<?php echo base_url().'/producto/editar/'.$producto["id"] ?>"> <i class="fas fa-edit"></i>  Actualizar</a>
    <a class="btn btn-danger" href="<?php echo base_url().'/producto/eliminar/'.$producto["id"] ?>"> <i class="fas fa-eraser"></i> Eliminar</a>
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