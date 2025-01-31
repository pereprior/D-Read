<?php
$title = "Register | D-Read";
ob_start();
?>

<h1 class="text-center my-4 text-primary">Register at D-Read</h1>

<form id="registerForm" class="container col-md-6 mb-5 col-lg-4 shadow p-4 rounded border">
    <div class="mb-3">
        <label for="username" class="form-label text-muted">Username</label>
        <input type="text" id="username" name="username" class="form-control shadow-sm" placeholder="Enter your username">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label text-muted">Email</label>
        <input type="email" id="email" name="email" class="form-control shadow-sm" placeholder="example@domain.com">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label text-muted">Password</label>
        <input type="password" id="password" name="password" class="form-control shadow-sm" placeholder="Choose a password">
    </div>
    <div class="mb-3">
        <label for="confirmPassword" class="form-label text-muted">Confirm Password</label>
        <input type="password" id="confirmPassword" name="confirmPassword" class="form-control shadow-sm" placeholder="Re-enter your password">
    </div>
    <div class="mt-2 text-center">
        <button type="submit" class="btn btn-warning w-25 py-2 mt-3">Register</button>
    </div>
</form>

<div id="responseMessage" class="container mt-3 text-center col-lg-3 col-md-6"></div>

<script src="js/ajax/register.js"></script>

<?php
$content = ob_get_clean();
include('templates/base.php');
?>