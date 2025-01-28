<?php
$title = "Books | D-Read";
ob_start();
?>

<p>Your cart is empty.</p>

<?php
$content = ob_get_clean();
include('templates/base.php');
?>