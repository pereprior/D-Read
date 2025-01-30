<?php session_start(); ?>

<header class="py-3">
  <div class="container">
      <!-- Header Title -->
      <div class="d-flex justify-content-between align-items-center mb-3 header-title">
          <!-- Logo -->
          <img src="img/logo_d-read-trans.png" alt="D-Read Logo">

          <!-- Login / Sign-up OR User Menu -->
          <nav>
              <ul class="nav">
                  <?php if (isset($_SESSION['user'])): ?>
                      <li class="nav-item">
                          <span class="nav-link fw-bold">Welcome, <?= htmlspecialchars($_SESSION['user']['username']); ?></span>
                      </li>
                      <li class="nav-item">
                          <a href="logout.php" class="nav-link">
                              <i class="fas fa-sign-out-alt me-1"></i> Logout
                          </a>
                      </li>
                  <?php else: ?>
                      <li class="nav-item">
                          <a href="login.php" class="nav-link">
                              <i class="fas fa-sign-in-alt me-1"></i> Log In
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="register.php" class="nav-link">
                              <i class="fas fa-user-plus me-1"></i> Sign Up
                          </a>
                      </li>
                  <?php endif; ?>
                  <li class="nav-item">
                    <button id="toggle-mode" class="btn">
                        <i id="mode-icon" class="fas fa-moon trans-bg"></i>
                    </button>
                  </li>
              </ul>
          </nav>
      </div>

      <!-- Header Title -->
      <h1 id="page-header" class="heading heading-primary text-center">D-Read: Read. Listen. Dive in!</h1>

      <!-- Navigation and Language Selector -->
      <div class="d-flex justify-content-between align-items-center mt-4">
          <nav class="pages-nav navbar navbar-expand-lg bg-light shadow-sm">
              <div class="container">
                  <ul class="navbar-nav mx-auto">
                      <li class="nav-item">
                          <a href="index.php" class="nav-link text-uppercase active">Home</a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link text-uppercase">Explore</a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link text-uppercase">Participants</a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link text-uppercase">Registration</a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link text-uppercase">Logistics</a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link text-uppercase">My site</a>
                      </li>
                      <?php if (isset($_SESSION['user'])): ?>
                      <li class="nav-item">
                          <a href="cart.php" class="nav-link text-uppercase">Cart</a>
                      </li>
                      <?php endif; ?>
                  </ul>
              </div>
          </nav>                

          <!-- Language Selector -->
          <div class="language-selector d-flex align-items-center">
              <label for="language-selector" class="me-3 fw-semibold">Language:</label>
              <div class="d-flex gap-3">
                  <div class="flag-selector">
                      <input type="radio" id="en" name="language" value="en" checked />
                      <label for="en">
                          <span class="fi fi-gb"></span> EN
                      </label>
                  </div>
                  <div class="flag-selector">
                      <input type="radio" id="es" name="language" value="es" />
                      <label for="es">
                          <span class="fi fi-es"></span> ES
                      </label>
                  </div>
              </div>
          </div>
          
      </div>

      <!-- Divider -->
      <hr class="divider mt-4">
  </div>

</header>