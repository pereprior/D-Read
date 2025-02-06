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

  <div id="book-cards" class="row mt-4" style="min-height: 500px;">

    <p class="text-muted">No books found for your search.</p>

  </div>

  <div class="text-center mb-5 hide">
      <a class="btn btn-success btn-disabled"><i class="fas fa-bookmark"></i> Save to Favorites</a>
      <a class="btn btn-primary btn-disabled"><i class="fas fa-info-circle"></i> View Details</a>
  </div>

</div>

<script type="module" src="js/widgets/jquery.tags.js"></script>

<?php
$content = ob_get_clean();
include('templates/base.php');
?>