<?= $navbar ?>

<div class="container">
    <div class="row">
    <div class="col-md-12 scroll">
    <div class="card my-4">

    <div class="card-title my-4 text-center ">  <h3>Actualizar Usuario</h3> </div>
   

    <div class="card-body text-center">
    <form action="#" method="POST">

    <label for="nombre">Tipo de Documento:</label>
    <select name="tipo_documento_id" class="form-control my-4">
    <option value="<?php echo $usuario["tipo_documento_id"] ?>"><?php echo $usuario["tipo_documento"]  ?></option>
    <?php  foreach($tipos_documento as $tipo_documento) 
     {  
          ?>
    <option value="<?php echo $tipo_documento["id"] ?>"><?php echo $tipo_documento["nombre"]  ?></option>
    <?php 
 } 
 ?>
    </select>


    <label for="nombre">Número de Documento:</label>
    <input type="number" name="numero_documento" value="<?php echo $usuario["numero_documento"]?>" class="form-control my-4" >

    <label for="nombre">Nombres:</label>
    <input type="text" name="nombres" value="<?php echo $usuario["nombres"]?>" class="form-control my-4">

    <label for="nombre">Apellidos:</label>
    <input type="text" name="apellidos" value="<?php echo $usuario["apellidos"]?>" class="form-control my-4" >

    <label for="nombre">Género:</label>
    <select name="genero_id" class="form-control my-4">
    <option value="<?php echo $usuario["genero_id"] ?>"><?php echo $usuario["genero"]  ?></option> 
    <?php  foreach($generos as $genero)  
    {   
        ?>
    <option value="<?php echo $genero["id"] ?>"><?php echo $genero["nombre"]  ?></option>
    <?php 
 } 
 ?>
    </select>

    <label for="nombre">Fecha de Nacimiento:</label>
    <input type="date" name="fecha_nacimiento" value="<?php echo $usuario["fecha_nacimiento"]?>" class="form-control my-4" >


    <label for="nombre">Ciudad:</label>
    <select name="ciudad_id" class="form-control my-4"> 
    <option value="<?php echo $usuario["ciudad_id"] ?>"><?php echo $usuario["ciudad"]  ?></option> 
    <?php  foreach($ciudades as $ciudad)  
    {   
        ?>
    <option value="<?php echo $ciudad["id"] ?>"><?php echo $ciudad["nombre"]  ?></option>
    <?php 
 } 
 ?>
    </select>

<label for="nombre">Correo:</label>
    <input type="email" name="correo" class="form-control my-4" value="<?php echo $usuario["correo"]?>" >

    <label for="nombre">Contraseña:</label>
    <input type="password" name="contrasena" class="form-control my-4" value="<?php echo $usuario["contrasena"]?>" >


    <label for="nombre">Dirección:</label>
    <input type="text" name="direccion" class="form-control my-4" value="<?php echo $usuario["direccion"]?>" >

    <label for="nombre">Teléfono:</label>
    <input type="number" name="telefono" class="form-control my-4" value="<?php echo $usuario["telefono"]?>" >

  
    
    <button class="btn btn-success my-4" type="submit"><i class="fas fa-redo-alt"></i> Actualizar Producto </button>
    <a class="btn btn-danger my-4" href="<?php  echo base_url()."/producto/"  ?>"><i class="fas fa-arrow-left"></i>   Volver</a>
    </form>
    </div>


    </div>

    </div>
    </div>
    </div> 

<?= $footer ?>