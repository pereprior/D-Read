<?php
$title = "About Us | D-Read";
$current_page = 'about';
ob_start();

include('templates/pages/about.html');

$content = ob_get_clean();
include('templates/base.php');
?>