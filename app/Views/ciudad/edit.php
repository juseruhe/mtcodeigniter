<?= $navbar ?>

<div class="container">
    <div class="row">
    <div class="col-md-12 scroll">
    <div class="card my-4">

    <div class="card-title my-4 text-center ">  <h3>Actualizar Ciudad</h3> </div>
   

    <div class="card-body text-center">
    <form action="<?php echo base_url().'/ciudad/'.$ciudad["id"]  ?>" method="POST">

    <label for="nombre">Nombre de Categoría:</label>
    <input type="text" name="nombre" value="<?php echo $ciudad["nombre"] ?>" >


    <label for="nombre">País:</label>
    <select name="pais_id" >
    <option value="<?php echo $ciudad["pais_id"]  ?>"><?php echo $ciudad["pais"] ?></option>
    <?php foreach($paises as $pais) 
    { 
    ?>
     <option value="<?php echo $pais["id"] ?>"><?php echo $pais["nombre"] ?></option>
    <?php 
    } 
    ?>
    </select>
    
    <button class="btn btn-success my-4" type="submit"><i class="fas fa-redo-alt"></i> Actualizar Ciudad</button>
    <a class="btn btn-danger my-4" href="<?php  echo base_url()."/ciudad/"  ?>"><i class="fas fa-arrow-left"></i>   Volver</a>
    </form>
    </div>


    </div>

    </div>
    </div>
    </div> 

<?= $footer ?>