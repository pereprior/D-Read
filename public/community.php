<?php
$title = "Community | D-Read";
$current_page = 'community';
ob_start();
?>

<div style="height: 700px; text-align: center; margin-top: 10px">

    <p style="color: red;">Page Unavaliable</p>

</div>

<?php
$content = ob_get_clean();
include('templates/base.php');
?>