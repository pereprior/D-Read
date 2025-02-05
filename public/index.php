<?php
$title = "Inicio | D-Read";
$current_page = 'home';
ob_start();
?>

<div class="container my-5">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8 px-5">
            <!-- Carousel Section -->
            <section class="mb-4">
                <h2 class="text-center mb-4"><i class="fas fa-tags"></i> Promociones</h2>
                <div class="promo-carousel">
                    <div><img src="img/promo4.png" alt="1"></div>
                    <div><img src="img/promo1.png" alt="2"></div>
                    <div><img src="img/promo3.png" alt="3"></div>
                    <div><img src="img/promo2.png" alt="4"></div>
                </div>
            </section>

            <!-- Featured Books -->
            <section>
                <h2 class="text-center mb-4"><i class="fas fa-book"></i> Libros Populares</h2>
                <div class="books-carousel" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>
                    <div class="shadow-sm d-flex justify-content-center align-items-center">
                        <img src="img/book1.jpg" class="card-img-top" alt="Where the Crawdads Sing">
                    </div>
                    <div class="shadow-sm d-flex justify-content-center align-items-center">
                        <img src="img/book2.jpg" class="card-img-top" alt="The Midnight Library">
                    </div>
                    <div class="shadow-sm d-flex justify-content-center align-items-center">
                        <img src="img/book3.jpg" class="card-img-top" alt="The Vanishing Half">
                    </div>
                    <div class="shadow-sm d-flex justify-content-center align-items-center">
                        <img src="img/book4.jpg" class="card-img-top" alt="The Four Winds">
                    </div>
                </div>
            </section>
        </div>

        <!-- Sidebar -->
        <aside class="col-lg-4">
            <!-- Latest News Section -->
            <section class="my-4 card-style p-4 rounded-3 shadow">
                <h3 class="mb-3 text-muted"><i class="fas fa-bullhorn"></i> Últimas Noticias</h3>
                <ul class="list-unstyled">
                    <li class="mb-3"><p><strong>Nueva actualización:</strong> Mejoras en el sistema de búsqueda</p></li>
                    <li class="mb-3"><p><strong>Evento especial:</strong> Club de lectura online - 15 de febrero</p></li>
                    <li class="mb-3"><p><strong>Ofertas:</strong> Descuentos en ebooks por tiempo limitado</p></li>
                </ul>
            </section><br><br>

            <!-- Book Recommendation Section -->
            <section class="my-4 card-style p-4 rounded-3 shadow">
                <h3 class="mb-3 text-muted"><i class="fas fa-star"></i> Recomendación del Día</h3>
                <div class="shadow-sm">
                    <img src="img/recommendation.jpg" class="card-img-top" alt="Libro Recomendado">
                </div>
            </section>
        </aside>
    </div>
</div>

<script src="js/plugins/jquery.carrousel.js"></script>

<?php
$content = ob_get_clean();
include('templates/base.php');
?>