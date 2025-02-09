<?php
$title = "Register | D-Read";
ob_start();

include('templates/pages/register.html');

$content = ob_get_clean();
echo $content;
?>