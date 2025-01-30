<?php
$title = "Books | D-Read";
$current_page = 'library';
ob_start();
?>

<div class="container mt-4">
  <div class="ui-widget">
    <label for="tags"></label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" style="background: transparent;"><i class="fas fa-search"></i></span>
        </div>
        <input id="tags" class="form-control" placeholder="Find your next read...">
    </div>
  </div>

  <div id="book-cards" class="row mt-4"></div>
</div>

<script type="module" src="js/widgets/jquery.tags.js"></script>

<?php
$content = ob_get_clean();
include('templates/base.php');
?>