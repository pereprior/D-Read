<?php
$title = "Login | D-Read";
ob_start();
?>

<h1 class="text-center my-4 text-primary">Inicia Sesión en D-Read</h1>
<form id="loginForm" class="container col-md-6 col-lg-4 shadow p-4 rounded border">
    <div class="mb-3">
        <label for="email" class="form-label text-muted">Correo Electrónico</label>
        <input type="email" id="email" name="email" class="form-control shadow-sm" placeholder="ejemplo@dominio.com">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label text-muted">Contraseña</label>
        <input type="password" id="password" name="password" class="form-control shadow-sm" placeholder="Ingresa tu contraseña">
    </div>
    <div class="mt-2 text-center">
        <button type="submit" class="btn btn-warning w-25 py-2 mt-3">Ingresar</button>
    </div>
</form>

<div id="responseMessage" class="mt-3 text-center"></div>

<script src="js/ajax/login.js"></script>

<?php
$content = ob_get_clean();
include('templates/base.php');
?>