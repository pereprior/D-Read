<?php
$title = "Inicio | D-Read";
$current_page = 'home';
ob_start();
?>

<div class="myCarrousel">
  <div><img src="img/promo4.png" alt="1"></div>
  <div><img src="img/promo1.png" alt="2"></div>
  <div><img src="img/promo3.png" alt="3"></div>
  <div><img src="img/promo2.png" alt="4"></div>
</div>

<script src="js/plugins/jquery.carrousel.js"></script>

<?php
$content = ob_get_clean(); // Guarda el contenido generado
include('templates/base.php'); // Incluye la plantilla base
?>