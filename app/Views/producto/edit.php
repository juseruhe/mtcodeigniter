<?= $navbar ?>

<div class="container">
    <div class="row">
    <div class="col-md-12 scroll">
    <div class="card my-4">

    <div class="card-title my-4 text-center ">  <h3>Actualizar Producto</h3> </div>
   

    <div class="card-body text-center">
    <form action="<?php echo base_url().'/producto/'.$producto["id"]   ?>" method="POST" enctype="multipart/form-data">

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $producto["nombre"]?>" class="form-control my-4" >
    
    
    <label for="imagen">Imagén:</label>
    <img src="../imagenes/<?php echo $producto["imagen"]?>" alt="<?php echo $producto["nombre"]?>">
    <input type="file" name="imagen" class="form-control my-4" >

    <label for="talla">Talla:</label>
    <select name="talla_id" class="form-control my-4">
    <option value="<?php echo $producto["talla_id"] ?>"><?php echo $producto["talla"]  ?></option>
    <?php  foreach($tallas as $talla) 
     {  
          ?>
    <option value="<?php echo $talla["id"] ?>"><?php echo $talla["nombre"]  ?></option>
    <?php 
 } 
 ?>
    </select>

    <label for="color">Color:</label>
   <input type="color" class=" form-control my-4" name="color" value="<?php echo $producto["color"]  ?>" >
    

    <label for="material">Material:</label>
    <select name="material_id" class="form-control my-4">
    <option value="<?php echo $producto["material_id"] ?>"><?php echo $producto["material"]  ?></option>
    <?php  foreach($materiales as $material) 
     {  
          ?>
    <option value="<?php echo $material["id"] ?>"><?php echo $material["nombre"]  ?></option>
    <?php 
 } 
 ?>
    </select>


    <label for="categoria">categoria:</label>
    <select name="categoria_id" class="form-control my-4">
    <option value="<?php echo $producto["categoria_id"] ?>"><?php echo $producto["categoria"]  ?></option>
    <?php  foreach($categorias as $categoria) 
     {  
          ?>
    <option value="<?php echo $categoria["id"] ?>"><?php echo $categoria["nombre"]  ?></option>
    <?php 
 } 
 ?>
    </select>


    <label for="clasificacion">clasificacion:</label>
    <select name="clasificacion_id" class="form-control my-4">
    <option value="<?php echo $producto["clasificacion_id"] ?>"><?php echo $producto["clasificacion"]  ?></option>
    <?php  foreach($clasificaciones as $clasificacion) 
     {  
          ?>
    <option value="<?php echo $clasificacion["id"] ?>"><?php echo $clasificacion["nombre"]  ?></option>
    <?php 
 } 
 ?>
    </select>

 <label for="valor">Valor:</label>
    <input type="number" name="valor" value="<?php echo $producto["valor"]?>" class="form-control my-4" >

    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad" value="<?php echo $producto["cantidad"]?>" class="form-control my-4">

    
    <button class="btn btn-success my-4" type="submit"><i class="fas fa-redo-alt"></i> Actualizar Producto </button>
    <a class="btn btn-danger my-4" href="<?php  echo base_url()."/producto/"  ?>"><i class="fas fa-arrow-left"></i>   Volver</a>
    </form>
    </div>


    </div>

    </div>
    </div>
    </div> 

<?= $footer ?>