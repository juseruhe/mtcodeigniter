<?php


if(isset($session))

{

?>




<?= $navbar   ?>

<div class="container">
<div class="row">
<div class="col-md-12 scroll">

<h3 class="text-center my-4 ">Bienvenido al Administrador Tienda Online <?php echo $session->get('correo') ?> </h3>



</div>
</div>
</div>

<?= $footer ?>

<?php
}

else {

  echo "<a href=".base_url()."/login> Volver </a>";

}
    

?>