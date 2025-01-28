<?php
$title = "Books | D-Read";
ob_start();
?>

<div class="ui-widget">
  <label for="tags">Tags: </label>
  <input id="tags">
</div>

<script src="js/widgets/jquery.tags.js"></script>

<?php
$content = ob_get_clean();
include('templates/base.php');
?>