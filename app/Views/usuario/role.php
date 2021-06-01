<?= $navbar ?>

<div class="container">
    <div class="row">
    <div class="col-md-12 scroll">
    <div class="card my-4">

    <div class="card-title my-4 text-center ">  <h3>Actualizar Rol</h3> </div>
   

    <div class="card-body text-center">
    <form action="<?php echo base_url().'/usuario/role/'.$usuario["id"] ?>" method="POST">

    
    <label for="nombre">Rol:</label>
    <select name="rol_id" class="form-control my-4"> 
    <option value="<?php echo $usuario["rol_id"] ?>"><?php echo $usuario["rol"]  ?></option> 
    <?php  foreach($roles as $rol)  
    {   
        ?>
    <option value="<?php echo $rol["id"] ?>"><?php echo $rol["nombre"]  ?></option>
    <?php 
 } 
 ?>
    </select>
    
    <button class="btn btn-success my-4" type="submit"><i class="fas fa-redo-alt"></i> Actualizar Rol </button>
    <a class="btn btn-danger my-4" href="<?php  echo base_url()."/usuario/"  ?>"><i class="fas fa-arrow-left"></i>   Volver</a>
    </form>
    </div>


    </div>

    </div>
    </div>
    </div> 

<?= $footer ?>