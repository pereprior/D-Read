<?php
$title = "Books | D-Read";
ob_start();
?>

<div class="container mt-4">
  <div class="ui-widget">
    <label for="tags">Tags: </label>
    <input id="tags">
  </div>

    <div id="book-cards" class="row mt-4"></div>
</div>

<script type="module" src="js/widgets/jquery.tags.js"></script>

<?php
$content = ob_get_clean();
include('templates/base.php');
?>