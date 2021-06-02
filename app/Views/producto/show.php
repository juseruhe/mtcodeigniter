<?= $navbar   ?>


<div class="container">
<div class="row">
<div class="col-md-12 scroll">

<h3 class="text-center my-4 ">Producto</h3>


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
    </tr>
    </thead>
    <?php
  
  
    ?>
    <tbody>
   
    <tr>
   
    <td><?php echo $producto["id"] ?></td>
    <td><?php echo $producto["nombre"] ?></td>
    <td><img src="<?php echo $producto["imagen"] ?>" alt="<?php echo $producto["nombre"] ?>"></td>
    <td><?php echo $producto["talla"] ?></td>
    <td><?php echo $producto["color"] ?></td>
    <td><?php echo $producto["material"] ?></td>
    <td><?php echo $producto["categoria"] ?></td>
    <td><?php echo $producto["clasificacion"]?></td>
    <td><?php echo $producto["valor"] ?></td>
    <td><?php echo $producto["cantidad"] ?></td>
  
   
   
   
   
    </tr>
   
    </tbody>
    <?php
    
    ?>
    
    </table>

    <a class="btn btn-danger" href="<?php echo base_url()."/producto/"?>"><i class="fas fa-arrow-left"></i> Volver</a>
    </div>
    </div>
    </div>

<?= $footer ?>