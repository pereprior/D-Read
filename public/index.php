<?php
$title = "Inicio | D-Read";
$current_page = 'home';
ob_start();

include('templates/pages/home.html');

$content = ob_get_clean();
include('templates/base.php');
?>