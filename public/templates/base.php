<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="D-Read es una aplicación multiplataforma gratuita que transforma la lectura en una experiencia inmersiva.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="robots" content="index, follow">

    <title><?php echo $title ?? 'D-Read | Un espacio para leer, compartir y soñar'; ?></title>

    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="js/ajax/jquery.register.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <?php include('templates/partials/header.html'); ?>

    <!-- Contenido dinámico -->
    <main class="container mt-4">
        <?php echo $content ?? ''; ?>
    </main>

    <!-- Pie de página -->
    <?php include('templates/partials/footer.html'); ?>

</body>
</html>