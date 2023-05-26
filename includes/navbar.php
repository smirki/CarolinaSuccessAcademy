<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Carolina Success Academy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=dashboard">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="index.php?page=courses">Courses</a></li>
            <li><a class="dropdown-item" href="index.php?page=pricing_packages">Pricing Packages</a></li>
            <li><a class="dropdown-item" href="index.php?page=camps">Camps</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=resources">Resources</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="index.php?page=testimonials">Testimonials</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=about">About</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="index.php?page=blog">Blog</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=contact_us">Contact Us</a>
        </li>

        
      </ul>
      <ul class="navbar-nav ms-auto"> <!-- Add ms-auto class here -->
        <?php if (isset($_SESSION['user_id'])): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $_SESSION['username']; ?> (<?php echo $_SESSION['user_type']; ?>)
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownUser">
              <li><a class="dropdown-item" href="index.php?page=profile">Profile</a></li>
              <li><a class="dropdown-item" href="index.php?page=logout">Logout</a></li>
            </ul>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=login">Login</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
