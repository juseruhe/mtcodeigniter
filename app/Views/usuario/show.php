<?= $navbar   ?>


<div class="container">
<div class="row">
<div class="col-md-12 scroll">

<h3 class="text-center my-4 ">Usuario</h3>


    <table class="table table-dark  text-center   ">
    <thead>
    <tr>
    <th>#</th>
    <th>Tipo de Documento</th>
    <th>Número de Documento</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Género</th>
    <th>Fecha de Nacimiento</th>
    <th>Ciudad</th>
    <th>Correo</th>
    <th>Dirección</th>
    <th>Teléfono</th>
    <th>Rol</th>
    </tr>
    </thead>
    <?php
  
  
    ?>
    <tbody>
   
    <tr>
   
    <td><?php echo $usuario["id"] ?></td>
    <td><?php echo $usuario["tipo_documento"] ?></td>
    <td><?php echo $usuario["numero_documento"] ?></td>
    <td><?php echo $usuario["nombres"] ?></td>
    <td><?php echo $usuario["apellidos"] ?></td>
    <td><?php echo $usuario["genero"] ?></td>
    <td><?php echo $usuario["fecha_nacimiento"] ?></td>
    <td><?php echo $usuario["ciudad"] ?></td>
    <td><?php echo $usuario["correo"] ?></td>
    <td><?php echo $usuario["direccion"] ?></td>
    <td><?php echo $usuario["telefono"] ?></td>
    <td><?php echo $usuario["correo"] ?></td>
    
   
   
   
   
    </tr>
   
    </tbody>
    <?php
    
    ?>
    
    </table>

    <a class="btn btn-danger" href="<?php echo base_url()."/usuario/"?>"><i class="fas fa-arrow-left"></i> Volver</a>
    </div>
    </div>
    </div>

<?= $footer ?>