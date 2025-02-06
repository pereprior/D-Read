<?php
$title = "Books | D-Read";
$current_page = 'library';
ob_start();

include('templates/pages/library.html');

$content = ob_get_clean();
include('templates/base.php');
?>