<?php
$title = "User Profile | D-Read";
$current_page = 'profile';
ob_start();

include('templates/partials/error.html');

$content = ob_get_clean();
include('templates/base.php');
?>