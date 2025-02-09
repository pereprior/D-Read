<?php
$title = "User Profile | D-Read";
$current_page = 'profile';
ob_start();

// Simulación de datos del usuario
$user = [
    "name" => "Usuario",
    "email" => "usuario@usuario.com",
    "avatar" => "img/user.png",
    "joined" => "Enero 2025",
    "books_read" => 25,
    "favorites" => 10,
    "reviews" => 15,
    "reading_time" => 120, // Tiempo de lectura total en horas
    "books_in_progress" => 3 // Libros en progreso
];

?>

<div class="container my-5">
    <div class="row">
        <!-- Profile Sidebar -->
        <aside class="col-lg-4">
            <div class="card shadow-sm p-4 text-center">
                <div class="shadow-sm d-flex justify-content-center align-items-center">
                    <img src="<?= $user['avatar'] ?>" alt="User Avatar" class="rounded-circle img-fluid mb-3" width="150">
                </div><br>
                <h3 class="mb-2"><?= htmlspecialchars($user['name']) ?></h3>
                <p class="text-muted"><?= htmlspecialchars($user['email']) ?></p>
                <p class="text-muted"><i class="fas fa-calendar-alt"></i> Miembro desde: <?= htmlspecialchars($user['joined']) ?></p>
                <a href="#" class="btn btn-primary mt-3 btn-disabled">Editar Perfil</a>
            </div>

            <!-- User Stats -->
            <div class="card shadow-sm p-4 mt-4">
                <h4 class="text-muted"><i class="fas fa-chart-bar"></i> Estadísticas</h4>
                <ul class="list-unstyled mt-3 ms-3">
                    <li class="d-flex align-items-start mb-1">
                        <i class="fas fa-book fa-5x mb-1 text-primary me-3 fs-30"></i><p> <strong>Libros leídos:</strong> <?= $user['books_read'] ?></p>
                    </li>
                    <li class="d-flex align-items-start mb-1">
                        <i class="fas fa-heart fa-5x mb-1 text-primary me-3 fs-30"></i><p> <strong>Favoritos:</strong> <?= $user['favorites'] ?></p>
                    </li>
                    <li class="d-flex align-items-start mb-1">
                        <i class="fas fa-pen fa-5x mb-1 text-primary me-3 fs-30"></i><p> <strong>Reseñas escritas:</strong> <?= $user['reviews'] ?></p>
                    </li>
                    <li class="d-flex align-items-start mb-1">
                        <i class="fas fa-clock fa-5x mb-1 text-primary me-3 fs-30"></i><p> <strong>Tiempo de lectura:</strong> <?= $user['reading_time'] ?> horas</p>
                    </li>
                    <li class="d-flex align-items-start mb-1">
                        <i class="fas fa-book-open fa-5x mb-1 text-primary me-3 fs-30"></i><p> <strong>Libros en progreso:</strong> <?= $user['books_in_progress'] ?></p>
                    </li>
                </ul>
            </div>

            <div class="card shadow-sm p-4 mt-4">
                <h4 class="text-muted"><i class="fas fa-users"></i> Comunidades</h4>
                <p class="text-muted mt-3 ms-3">La opción de comunidades no está disponible en este momento.</p>
            </div>
        </aside>

        <!-- Profile Main Content -->
        <div class="col-lg-8 px-5">
            <h1 id="page-title" class="heading heading-secondary">Actividad Reciente</h1>

            <section class="mb-4">
                <div class="card shadow-sm p-4">
                    <h4 class="mb-3 text-muted"><i class="fas fa-book"></i> Últimos libros leídos</h4>
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="img/book1.jpg" class="card-img-top rounded shadow-sm" alt="Book 1">
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="img/book2.jpg" class="card-img-top rounded shadow-sm" alt="Book 2">
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="img/book3.jpg" class="card-img-top rounded shadow-sm" alt="Book 3">
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-4">
                <div class="card shadow-sm p-4">
                    <h4 class="mb-3 text-muted"><i class="fas fa-comment"></i> Últimas Reseñas</h4>
                    <ul class="list-unstyled">
                        <li class="mb-4 d-flex justify-content-between align-items-center">
                            <p class="mb-0"><strong>Don Quijote:</strong> "Un libro imprescindible para cualquier lector apasionado."</p>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                        </li>
                        <li class="mb-4 d-flex justify-content-between align-items-center">
                            <p class="mb-0"><strong>1984:</strong> "Distópico y aterrador. Un clásico atemporal."</p>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <p class="mb-0"><strong>El Hobbit:</strong> "Un viaje épico lleno de magia y aventuras."</p>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </li>
                    </ul>
                </div>
            </section>

            <section>
                <div class="card shadow-sm p-4">
                    <h4 class="mb-3 text-muted"><i class="fas fa-heart"></i> Libros Favoritos</h4>
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="img/book4.jpg" class="card-img-top rounded shadow-sm" alt="Book 4">
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="img/book5.jpg" class="card-img-top rounded shadow-sm" alt="Book 5">
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="img/book6.jpg" class="card-img-top rounded shadow-sm" alt="Book 6">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include('templates/base.php');
?>