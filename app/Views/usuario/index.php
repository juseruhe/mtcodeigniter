<?= $navbar   ?>


<div class="container">
<div class="row">
<div class="col-md-12 scroll">

<h3 class="text-center my-4 ">Usuarios</h3>

<a href="#" class="btn btn-primary my-4"> <i class="fas fa-plus-circle"></i>    Crear Usuario</a>
 
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
    <th>Correo</th>
    <th>Dirección</th>
    <th>Teléfono</th>
    <th>Rol</th>
    <th>Ciudad</th>
    <th>Acciones</th>
    </tr>
    </thead>
    <?php
    foreach($usuarios as $usuario)
    {
    ?>
    <tbody>
   
    <tr>
   
    <td><?php echo $usuario['id'] ?></td>
    <td><?php echo $usuario['tipo_documento'] ?></td>
    <td><?php echo $usuario['numero_documento'] ?></td>
    <td><?php echo $usuario['nombres'] ?></td>
    <td><?php echo $usuario['apellidos'] ?></td>
    <td><?php echo $usuario['genero'] ?></td>
    <td><?php echo $usuario['fecha_nacimiento'] ?></td>
    <td><?php echo $usuario['correo'] ?></td>
    <td><?php echo $usuario['direccion'] ?></td>
    <td><?php echo $usuario['telefono'] ?></td>
    <td><?php echo $usuario['rol'] ?></td>
    <td><?php echo $usuario['ciudad'] ?></td>
    <td>
    <a class="btn btn-info" href="#"><i class="fas fa-eye"></i>  Mostrar</a>
    <a class="btn btn-warning" href="#"> <i class="fas fa-edit"></i>  Actualizar</a>
    <a class="btn btn-danger" href="#"> <i class="fas fa-eraser"></i>   Eliminar</a>
    </td>
   
    </tr>
   
    </tbody>
    <?php
    }
    ?>
    </table>
    </div>
    </div>
    </div>

<?= $footer ?>