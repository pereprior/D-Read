<?php
$title = "About Us | D-Read";
$current_page = 'about';
ob_start();
?>

<!-- Main Content -->
<main class="py-3">
    <div class="container mb-2">
        <div class="row">
            <!-- Main Content Area -->
            <div class="col-lg-8 px-5">
                <header class="mb-4">
                    <h1 id="page-title" class="heading heading-secondary">About D-Read</h1>
                </header>

                <section id="about-intro">
                    <article class="mb-5">
                        <div class="d-flex flex-column flex-md-row align-items-start">
                            <div class="me-md-4">
                                <p><strong>Welcome to D-Read</strong>, your ultimate destination for discovering and enjoying books. Our platform is designed to connect book lovers from around the world and provide personalized reading experiences.</p>
                                <p><strong>At D-Read</strong>, we believe in the power of books to inspire, educate, and entertain. Our mission is to make reading accessible and enjoyable for everyone, regardless of their background or interests.</p>
                            </div>
                            <img src="img/about.png" alt="About Us" class="img-fluid w-25 mx-4 align-self-center">
                        </div>
                    </article>
                </section>

                <section id="our-mission" class="mb-5">
                    <header>
                        <h2 class="sub-heading heading-primary">Our Mission</h2>
                    </header>
                    <p>
                        Our mission is to foster a love for reading by providing a platform that offers a vast collection of books, personalized recommendations, and a community of like-minded individuals. We aim to make reading a more immersive and interactive experience.
                    </p>
                    <p>
                        We are committed to supporting authors and publishers by giving them a platform to reach a wider audience. Through D-Read, we hope to create a vibrant ecosystem where readers and writers can thrive together.
                    </p>
                </section>

                <section id="our-team">
                    <header>
                        <h2 class="sub-heading heading-primary">Meet the Team</h2>
                    </header>
                    <p>
                        We are a passionate group of book lovers who believe in the power of reading and technology. Our team is dedicated to creating the best possible experience for our users.
                    </p>

                    <!-- Team Members -->
                    <div class="row mt-4">
                        <div class="col-md-4 text-center">
                            <img src="img/team1.png" class="rounded-circle mb-3 sm-usr-icn" alt="Team Member 1">
                            <h3>John Doe</h3>
                            <p class="text-muted">Founder & CEO</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="img/team2.png" class="rounded-circle mb-3 sm-usr-icn" alt="Team Member 2">
                            <h3>Jane Smith</h3>
                            <p class="text-muted">Lead Developer</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="img/team3.png" class="rounded-circle mb-3 sm-usr-icn" alt="Team Member 3">
                            <h3>Robert Doe</h3>
                            <p class="text-muted">Marketing Director</p>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Sidebar -->
            <aside class="col-lg-4">
                <!-- Contact Section -->
                <section id="contact-info" class="my-4 text-center card-style p-4 rounded-3 shadow">
                    <h2 class="mb-3">Contact Us</h2>
                    <p class="text-muted">Have any questions? Reach out to us!</p>
                    <a href="contact.php" class="btn btn-primary w-100">Get in Touch</a>
                </section>

                <!-- Why Choose Us Section -->
                <section id="why-choose-us" class="my-4 card-style p-4 rounded-3 shadow">
                    <header>
                        <h2 class="mb-3">Why Choose D-Read?</h2>
                    </header><br>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-start mb-3">
                            <i class="fas fa-book fa-5x mb-1 text-primary me-3 fs-30"></i>
                            <span>Thousands of books to discover</span>
                        </li>
                        <li class="d-flex align-items-start mb-3">
                            <i class="fas fa-user-tie fa-5x mb-3 text-primary me-3 fs-30"></i>
                            <span>Connect with fellow book lovers</span>
                        </li>
                        <li class="d-flex align-items-start mb-3">
                            <i class="fas fa-search fa-5x mb-3 text-primary me-3 fs-30"></i>
                            <span>Personalized book recommendations</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fas fa-headphones-alt fa-5x mb-3 text-primary me-3 fs-30"></i>
                            <span>Immersive reading experience with soundtracks</span>
                        </li>
                    </ul>
                </section>
            </aside>                
        </div>
    </div>
</main>

<?php
$content = ob_get_clean();
include('templates/base.php');
?>