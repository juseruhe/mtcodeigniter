<?= $navbar ?>

<div class="container">
    <div class="row">
    <div class="col-md-12 scroll">
    <div class="card my-4">

    <div class="card-title my-4 text-center ">  <h3>Crear Usuario</h3> </div>
   

    <div class="card-body text-center">
    <form action="<?php echo base_url().'/usuario' ?>" method="POST">

    <label for="nombre">Tipo de Documento:</label>
    <select name="tipo_documento_id" class="form-control my-4" required>
    <?php  foreach($tipos_documento as $tipo_documento) 
     {  
          ?>
    <option value="<?php echo $tipo_documento["id"] ?>"><?php echo $tipo_documento["nombre"]  ?></option>
    <?php 
 } 
 ?>
    </select>


    <label for="nombre">Número de Documento:</label>
    <input type="number" name="numero_documento" class="form-control my-4" required>

    <label for="nombre">Nombres:</label>
    <input type="text" name="nombres" class="form-control my-4" required>

    <label for="nombre">Apellidos:</label>
    <input type="text" name="apellidos" class="form-control my-4" required >

    <label for="nombre">Género:</label>
    <select name="genero_id" class="form-control my-4" required> 
    <?php  foreach($generos as $genero)  
    {   
        ?>
    <option value="<?php echo $genero["id"] ?>"><?php echo $genero["nombre"]  ?></option>
    <?php 
 } 
 ?>
    </select>

    <label for="nombre">Fecha de Nacimiento:</label>
    <input type="date" name="fecha_nacimiento" class="form-control my-4" required >


    <label for="nombre">Ciudad:</label>
    <select name="ciudad_id" class="form-control my-4" required> 
    <?php  foreach($ciudades as $ciudad)  
    {   
        ?>
    <option value="<?php echo $ciudad["id"] ?>"><?php echo $ciudad["nombre"]  ?></option>
    <?php 
 } 
 ?>
    </select>

<label for="nombre">Correo:</label>
    <input type="email" name="correo" class="form-control my-4" required >

    <label for="nombre">Contraseña:</label>
    <input type="password" name="contrasena" class="form-control my-4" required>


    <label for="nombre">Dirección:</label>
    <input type="text" name="direccion" class="form-control my-4" required>

    <label for="nombre">Teléfono:</label>
    <input type="number" name="telefono" class="form-control my-4" required>

    <label for="nombre">Rol:</label>
    <select name="rol_id" class="form-control my-4" required> 
    <?php  foreach($roles as $rol)  
    {   
        ?>
    <option value="<?php echo $rol["id"] ?>"><?php echo $rol["nombre"]  ?></option>
    <?php 
 } 
 ?>
    </select>

    
    <button class="btn btn-success my-4 " type="submit"><i class="fas fa-plus-circle"></i>  Insertar Usuario </button>
    <a class="btn btn-danger my-4" href="<?php  echo base_url()."/usuario/"  ?>"><i class="fas fa-arrow-left"></i>   Volver</a>
    </form>
    </div>


    </div>

    </div>
    </div>
    </div> 

<?= $footer ?>