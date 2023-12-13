 <!-- Start Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="index.php">Project_1</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
        </li>
        <?php if(!isset($_SESSION['auth'])): ?>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="register.php  ">Register</a>
        </li>
        <?php else: ?>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="profile.php">Profile</a>
        </li>
        <?php endif; ?>
        <?php ?>
      </ul>
      <?php if (isset($_SESSION['auth'])) :?>
      <ul class= "navbar-nav mr-auto mb-2 mb-lg-0">
      <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="logout.php">Logout</a>
          </li>
        </ul>
        <?php endif;?>
    </div>
  </div>
</nav>
<!-- END Navbar -->


