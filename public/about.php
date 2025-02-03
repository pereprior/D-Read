<?php
$title = "About Us | D-Read";
$current_page = 'about';
ob_start();

include('templates/partials/error.html');

$content = ob_get_clean();
include('templates/base.php');
?>
