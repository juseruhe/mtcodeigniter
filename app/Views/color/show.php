<?= $navbar   ?>


<div class="container">
<div class="row">
<div class="col-md-12 scroll">

<h3 class="text-center my-4 ">Color</h3>


    <table class="table table-dark  text-center   ">
    <thead>
    <tr>
    <th>#</th>
    <th>Nombre</th>
    </tr>
    </thead>

    <tbody>
   
    <tr>
   
    <td><?php echo $color["id"] ?></td>
    <td><?php echo $color["nombre"] ?></td>
   
    </tr>
   
    </tbody>

    
    </table>

    <a class="btn btn-danger" href="<?php echo base_url()."/color/"?>">Volver</a>
    </div>
    </div>
    </div>

<?= $footer ?>