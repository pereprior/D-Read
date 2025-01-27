<?php
$title = "Registro | D-Read";
ob_start();
?>

<h1>Regístrate en D-Read</h1>
<form id="registerForm">
    <div class="mb-3">
        <label for="username" class="form-label">Nombre de usuario</label>
        <input type="text" id="username" name="username" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Correo Electrónico</label>
        <input type="email" id="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" id="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <label for="confirmPassword" class="form-label">Confirma tu contraseña</label>
        <input type="password" id="confirmPassword" name="confirmPassword" class="form-control">
    </div>
    <button type="submit" class="btn btn-warning">Registrarse</button>
</form>

<!-- Mensaje para mostrar el resultado -->
<div id="responseMessage" class="mt-3"></div>

<script src="js/ajax/jquery.register.js"></script>

<?php
$content = ob_get_clean();
include('templates/base.php');
?>