<?= $navbar ?>

<div class="container">
    <div class="row">
    <div class="col-md-12 scroll">
    <div class="card my-4">

    <div class="card-title my-4 text-center ">  <h3>Actualizar Tipo de Documento</h3> </div>
   

    <div class="card-body text-center">
    <form action="<?php echo base_url().'/tipo_documento/'.$tipo_documento["id"]?>" method="POST">

    <label for="nombre">Nombre de Talla:</label>
    <input type="text" name="nombre" value="<?php echo $tipo_documento["nombre"] ?>" >

    <label for="nombre">Siglas:</label>
    <input type="text" name="siglas" value="<?php echo $tipo_documento["siglas"] ?>" >
    
    <input class="btn btn-success my-4" type="submit" value="Actualizar Tipo Documento">
    <a class="btn btn-danger my-4" href="<?php  echo base_url()."/tipo_documento/"  ?>"><i class="fas fa-arrow-left"></i>   Volver</a>
    </form>
    </div>


    </div>

    </div>
    </div>
    </div> 

<?= $footer ?>