<?= $navbar ?>

<div class="container">
    <div class="row">
    <div class="col-md-12 scroll">
    <div class="card my-4">

    <div class="card-title my-4 text-center ">  <h3>Crear Producto</h3> </div>
   

    <div class="card-body text-center">
    <form action="<?php echo base_url().'/producto' ?>" method="POST" enctype="multipart/form-data">

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" class="form-control my-4" required >

    <label for="imagen">Imagén:</label>
    <input type="file" name="imagen" class="form-control my-4" >

    <label for="talla">Talla:</label>
    <select name="talla_id" class="form-control my-4" required>
    <?php  foreach($tallas as $talla) 
     {  
          ?>
    <option value="<?php echo $talla["id"] ?>"><?php echo $talla["nombre"]  ?></option>
    <?php 
 } 
 ?>
    </select>

    <label for="color">Color:</label>
    <select name="color_id" class="form-control my-4">
    <?php  foreach($colores as $color) 
     {  
          ?>
    <option value="<?php echo $color["id"] ?>"><?php echo $color["nombre"]  ?></option>
    <?php 
 } 
 ?>
    </select>

    <label for="material">Material:</label>
    <select name="material_id" class="form-control my-4" required>
    <?php  foreach($materiales as $material) 
     {  
          ?>
    <option value="<?php echo $material["id"] ?>"><?php echo $material["nombre"]  ?></option>
    <?php 
 } 
 ?>
    </select>

    <label for="categoria">Catégoria:</label>
    <select name="categoria_id" class="form-control my-4" required>
    <?php  foreach($categorias as $categoria) 
     {  
          ?>
    <option value="<?php echo $categoria["id"] ?>"><?php echo $categoria["nombre"]  ?></option>
    <?php 
 } 
 ?>
    </select>

    <label for="clasificacion">Clasificación:</label>
    <select name="clasificacion_id" class="form-control my-4" required>
    <?php  foreach($clasificaciones as $clasificacion) 
     {  
          ?>
    <option value="<?php echo $clasificacion["id"] ?>"><?php echo $clasificacion["nombre"]  ?></option>
    <?php 
 } 
 ?>
    </select>
    

    <label for="valor">Valor:</label>
    <input type="number" name="valor" class="form-control my-4" required>

    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad" class="form-control my-4" required>

    <button class="btn btn-success my-4 " type="submit"><i class="fas fa-plus-circle"></i>  Insertar Producto </button>
    <a class="btn btn-danger my-4" href="<?php  echo base_url()."/producto/"  ?>"><i class="fas fa-arrow-left"></i>   Volver</a>
    </form>
    </div>


    </div>

    </div>
    </div>
    </div> 

<?= $footer ?>