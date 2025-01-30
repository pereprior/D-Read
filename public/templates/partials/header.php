<?php session_start(); ?>

<header class="py-3">
  <div class="container">
      <!-- Header Title -->
      <div class="d-flex justify-content-between align-items-center mb-3 header-title">
          <!-- Logo -->
          <img src="img/logo_d-read-trans.png" alt="D-Read Logo">

          <nav class="pages-nav navbar navbar-expand-lg shadow-sm">
            <div class="container">
                <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                      <a href="index.php" id="home" class="nav-link text-uppercase <?= ($current_page == 'home') ? 'active' : '' ?>">
                          <i class="fas fa-home"></i> Home
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="books.php" id="library" class="nav-link text-uppercase <?= ($current_page == 'library') ? 'active' : '' ?>">
                          <i class="fas fa-book"></i> Library
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="soundtrack.php" id="soundtrack" class="nav-link text-uppercase <?= ($current_page == 'soundtrack') ? 'active' : '' ?>">
                          <i class="fas fa-music"></i> SoundTrack
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="community.php" id="community" class="nav-link text-uppercase <?= ($current_page == 'community') ? 'active' : '' ?>">
                          <i class="fas fa-users"></i> Community
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="profile.php" id="profile" class="nav-link text-uppercase <?= ($current_page == 'profile') ? 'active' : '' ?>">
                          <i class="fas fa-user"></i> User Profile
                      </a>
                  </li>
                </ul>
            </div>
          </nav>

          <!-- Login / Sign-up OR User Menu -->
          <nav>
              <ul class="nav">
                  <?php if (isset($_SESSION['user'])): ?>
                      <li class="nav-item">
                          <span class="nav-link fw-bold">Welcome, <?= htmlspecialchars($_SESSION['user']['username']); ?></span>
                      </li>
                      <li class="nav-item">
                          <a href="logout.php" id="logout" class="nav-link">
                              <i class="fas fa-sign-out-alt me-1"></i> Logout
                          </a>
                      </li>
                  <?php else: ?>
                      <li class="nav-item">
                          <a href="login.php" id="login" class="nav-link">
                              <i class="fas fa-sign-in-alt me-1"></i> Log In
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="register.php" id="signup" class="nav-link">
                              <i class="fas fa-user-plus me-1"></i> Sign Up
                          </a>
                      </li>
                  <?php endif; ?>
              </ul>
          </nav>
      </div>

      <!-- Navigation and Language Selector -->
      <div class="mt-4 d-flex ms-auto justify-content-end">
        <div class="language-selector d-flex align-items-center">
            <label for="language-selector" id="language" class="me-3 fw-semibold">Language:</label>
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

        <button id="toggle-mode" class="btn">
            <i id="mode-icon" class="fas fa-moon trans-bg"></i>
        </button>
      </div>
    
  </div>

</header>

<script type="text/javascript" src="js/jquery/languageSelector.js"></script>