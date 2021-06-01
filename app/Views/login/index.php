<?= $navbar ?>

<div class="container">
    <div class="row">
    <div class="col-md-12 scroll">
    <div class="card my-4">

<!-- Alerta -->
<?php 
if(session('mensaje')) {
?>
<div class="alert alert-danger" role="alert">
<i class="fas fa-times-circle"></i> <?php echo session('mensaje') ?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close" >
<span aria-hidden="true">&times;</span>
</button>
</div>
<?php
}else {
}
?>
<!-- Fín de Alerta  -->

    <div class="card-title my-4 text-center ">  <h3>Iniciar Sesión</h3> </div>
   

    <div class="card-body text-center">
    <form action="<?php echo base_url().'/login' ?>" method="POST">

    <label for="nombre">Correo:</label>
    <input type="email" name="correo" required>

    <label for="nombre">Contraseña:</label>
    <input type="password" name="contrasena" required>
    
    <button class="btn btn-success my-4 " type="submit"><i class="fas fa-user-shield"></i> Iniciar Sesión </button>
    <a class="btn btn-danger my-4" href="<?php  echo base_url()."/"  ?>"><i class="fas fa-arrow-left"></i>   Volver</a>
    </form>
    </div>


    </div>

    </div>
    </div>
    </div> 

<?= $footer ?>