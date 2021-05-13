<?= $navbar ?>

<div class="container">
    <div class="row">
    <div class="col-md-12 scroll">
    <div class="card my-4">

    <div class="card-title my-4 text-center ">  <h3>Actualizar Clasificación</h3> </div>
   


    <div class="card-body text-center">
    <form action="<?php echo base_url().'/clasificacion/'.$clasificacion["id"]  ?>" method="POST">

    <label for="nombre">Nombre de Clasificación:</label>
    <input type="text" name="nombre" value="<?php echo $clasificacion["nombre"] ?>" >
    
    <button class="btn btn-success my-4" type="submit" > <i class="fas fa-redo-alt"></i> Actualizar Clasificacion </button>
    <a class="btn btn-danger my-4" href="<?php  echo base_url()."/clasificacion/"  ?>"><i class="fas fa-arrow-left"></i>   Volver</a>
    </form>
    </div>


    </div>

    </div>
    </div>
    </div> 

<?= $footer ?>