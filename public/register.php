<?php
$title = "Register | D-Read";
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Mozilla Drumbeat is a global community of Mozillians who *use* web technologies in new ways to understand, participate, and take control of their online lives.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="robots" content="index, follow">

    <title>D-Read | Registration</title>

    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">

    <script src="../js/main.js"></script>
</head>
<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 480px;">
            <h2 class="text-center mb-4 heading heading-primary">User Registration</h2>
            <form id="registerForm">
                <!-- Username -->
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                </div>
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com">
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Create a secure password">
                </div>
                <!-- Confirm Password -->
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Repeat your password">
                </div>
                <!-- Register Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
            <p class="text-center mt-3">
                Already have an account? <a href="login.php">Log in</a>
            </p>

            <div id="responseMessage" class="container mt-3 text-center"></div>

        </div>
    </div>

    <script src="js/ajax/register.js"></script>

</body>
</html>

<?php
$content = ob_get_clean();
echo $content;
?>