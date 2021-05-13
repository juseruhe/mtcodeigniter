<?= $navbar   ?>


<div class="container">
<div class="row">
<div class="col-md-12 scroll">

<h3 class="text-center my-4 ">Materiales</h3>


    <table class="table table-dark  text-center   ">
    <thead>
    <tr>
    <th>#</th>
    <th>Nombre</th>
    </tr>
    </thead>
    <?php
  
  
    ?>
    <tbody>
   
    <tr>
   
    <td><?php echo $material["id"] ?></td>
    <td><?php echo $material["nombre"] ?></td>
   
    </tr>
   
    </tbody>
    <?php
    
    ?>
    
    </table>

    <a class="btn btn-danger" href="<?php echo base_url()."/material/"?>"><i class="fas fa-arrow-left"></i> Volver</a>
    </div>
    </div>
    </div>

<?= $footer ?>