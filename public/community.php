<?php
$title = "Community | D-Read";
$current_page = 'community';
ob_start();

include('templates/partials/error.html');

$content = ob_get_clean();
echo $content;
?>
