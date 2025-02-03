<?php
$title = "Login | D-Read";
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Log in to your Mozilla Drumbeat account to participate in our global community.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="robots" content="index, follow">

    <title>D-Read | Login</title>

    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">

    <script src="../js/main.js"></script>
</head>
<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px;">
            <h2 class="text-center mb-4 heading heading-primary">User Login</h2>
            <form id="loginForm">
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="youremail@example.com">
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                </div>
                <!-- Remember Me -->
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="remember-me" name="remember-me">
                    <label class="form-check-label" for="remember-me">
                        Remember Me
                    </label>
                </div>
                <!-- Login Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Log In</button>
                </div>
            </form>
            <p class="text-center mt-3">
                Don't have an account? <a href="register.php">Sign up</a>
            </p>

            <div id="responseMessage" class="container mt-3 text-center"></div>

        </div>
    </div>

    <script src="js/ajax/login.js"></script>

</body>
</html>

<?php
$content = ob_get_clean();
echo $content;
?>