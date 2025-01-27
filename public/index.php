<?php
$title = "Inicio | D-Read";
ob_start(); // Inicia el almacenamiento en buffer
?>

<div class="myCarrousel">
  <div><img src="img/fondo.png" alt="1"></div>
  <div><img src="img/fondo.png" alt="2"></div>
</div>

<script src="js/plugins/jquery.carrousel.js"></script>

<?php
$content = ob_get_clean(); // Guarda el contenido generado
include('templates/base.php'); // Incluye la plantilla base
?>
