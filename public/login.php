<?php
$title = "Login | D-Read";
ob_start();

include('templates/pages/login.html');

$content = ob_get_clean();
echo $content;
?>