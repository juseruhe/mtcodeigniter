<?= $navbar   ?>


<div class="container">
<div class="row">
<div class="col-md-12 scroll">

<h3 class="text-center my-4 ">Clasificación</h3>


    <table class="table table-dark  text-center   ">
    <thead>
    <tr>
    <th>#</th>
    <th>Nombre</th>
    </tr>
    </thead>

    <tbody>
   
    <tr>
   
    <td><?php echo $clasificacion["id"] ?></td>
    <td><?php echo $clasificacion["nombre"] ?></td>
   
    </tr>
   
    </tbody>

    
    </table>

    <a class="btn btn-danger" href="<?php echo base_url()."/clasificacion/"?>"><i class="fas fa-arrow-left"></i>  Volver</a>
    </div>
    </div>
    </div>

<?= $footer ?>