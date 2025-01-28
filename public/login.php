<?php
$title = "Books | D-Read";
ob_start();
?>

<p>Login deshabilitado temporalmente</p>

<?php
$content = ob_get_clean();
include('templates/base.php');
?>