<?php
$title = "User Profile | D-Read";
$current_page = 'profile';
ob_start();

// Simulación de datos del usuario
$user = [
    "name" => "John Doe",
    "email" => "johndoe@example.com",
    "avatar" => "img/avatar.png",
    "joined" => "Enero 2024",
    "books_read" => 25,
    "favorites" => 10,
    "reviews" => 15
];

?>

<div class="container my-5">
    <div class="row">
        <!-- Profile Sidebar -->
        <aside class="col-lg-4">
            <div class="card shadow-sm p-4 text-center">
                <img src="<?= $user['avatar'] ?>" alt="User Avatar" class="rounded-circle img-fluid mb-3" width="150">
                <h3 class="mb-2"><?= htmlspecialchars($user['name']) ?></h3>
                <p class="text-muted"><?= htmlspecialchars($user['email']) ?></p>
                <p class="text-muted">📅 Miembro desde: <?= htmlspecialchars($user['joined']) ?></p>
                <a href="#" class="btn btn-primary mt-3">Editar Perfil</a>
            </div>

            <!-- User Stats -->
            <div class="card shadow-sm p-4 mt-4">
                <h4 class="text-muted">📊 Estadísticas</h4>
                <ul class="list-unstyled mt-3">
                    <li><strong>📚 Libros leídos:</strong> <?= $user['books_read'] ?></li>
                    <li><strong>❤️ Favoritos:</strong> <?= $user['favorites'] ?></li>
                    <li><strong>📝 Reseñas escritas:</strong> <?= $user['reviews'] ?></li>
                </ul>
            </div>
        </aside>

        <!-- Profile Main Content -->
        <div class="col-lg-8 px-5">
            <h2 class="text-center mb-4"><i class="fas fa-user"></i> Actividad Reciente</h2>

            <section class="mb-4">
                <div class="card shadow-sm p-4">
                    <h4 class="mb-3 text-muted"><i class="fas fa-book"></i> Últimos libros leídos</h4>
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="img/book1.jpg" class="img-fluid rounded shadow-sm" alt="Book 1">
                            <p class="mt-2">1984</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="img/book2.jpg" class="img-fluid rounded shadow-sm" alt="Book 2">
                            <p class="mt-2">El Gran Gatsby</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="img/book3.jpg" class="img-fluid rounded shadow-sm" alt="Book 3">
                            <p class="mt-2">Cien Años de Soledad</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mb-4">
                <div class="card shadow-sm p-4">
                    <h4 class="mb-3 text-muted"><i class="fas fa-comment"></i> Últimas Reseñas</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3"><strong>📖 Don Quijote:</strong> "Un libro imprescindible para cualquier lector apasionado." ⭐⭐⭐⭐⭐</li>
                        <li class="mb-3"><strong>📖 1984:</strong> "Distópico y aterrador. Un clásico atemporal." ⭐⭐⭐⭐☆</li>
                        <li class="mb-3"><strong>📖 El Hobbit:</strong> "Un viaje épico lleno de magia y aventuras." ⭐⭐⭐⭐⭐</li>
                    </ul>
                </div>
            </section>

            <section>
                <div class="card shadow-sm p-4">
                    <h4 class="mb-3 text-muted"><i class="fas fa-heart"></i> Libros Favoritos</h4>
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="img/book4.jpg" class="img-fluid rounded shadow-sm" alt="Book 4">
                            <p class="mt-2">Orgullo y Prejuicio</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="img/book5.jpg" class="img-fluid rounded shadow-sm" alt="Book 5">
                            <p class="mt-2">Matar a un Ruiseñor</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="img/book6.jpg" class="img-fluid rounded shadow-sm" alt="Book 6">
                            <p class="mt-2">Crónica de una Muerte Anunciada</p>
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
