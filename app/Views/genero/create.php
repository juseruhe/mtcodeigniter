<?= $navbar ?>

<div class="container">
    <div class="row">
    <div class="col-md-12 scroll">
    <div class="card my-4">

    <div class="card-title my-4 text-center ">  <h3>Crear Género</h3> </div>
   

    <div class="card-body text-center">
    <form action="<?php echo base_url().'/genero' ?>" method="POST">

    <label for="nombre">Nombre de Género:</label>
    <input type="text" name="nombre" >
    
    <input class="btn btn-success my-4 " type="submit" value="Insertar Género"> 
    <a class="btn btn-danger my-4" href="<?php  echo base_url()."/genero/"  ?>"><i class="fas fa-arrow-left"></i>   Volver</a>
    </form>
    </div>


    </div>

    </div>
    </div>
    </div> 

<?= $footer ?>