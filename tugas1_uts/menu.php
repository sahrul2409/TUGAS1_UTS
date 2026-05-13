<style>
.navbar-nav .nav-link:hover {
    background-color: rgb(140, 232, 101);
    border-radius: 8px;
    transition: all 0.3s ease;
    color: white !important;
}
.navbar-nav .nav-item .btn:hover {
    background-color: rgb(116, 215, 87) !important;
    border-radius: 8px;
    transition: all 0.3s ease;
}
</style>

<?php $page = $_GET['page'] ?? 'home'; ?>

<nav class="navbar navbar-expand-lg shadow-sm px-4" style="background-color: #5edf6b;">
  <div class="container-fluid">

    <a class="navbar-brand fw-bold" href="#" style="color:#000000;">
      MyWeb
    </a>

    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav">

      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link <?= $page=='home'?'fw-bold text-primary':'' ?>" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= $page=='about'?'fw-bold text-primary':'' ?>" href="?page=about">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= $page=='contact'?'fw-bold text-primary':'' ?>" href="?page=contact">Contact</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?= ($page=='level'||$page=='studies')?'fw-bold text-primary':'' ?>" data-bs-toggle="dropdown">
            Studies
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=level">Level</a></li>
            <li><a class="dropdown-item" href="?page=studies">Studies</a></li>
          </ul>
        </li>

      </ul>

      <ul class="navbar-nav">
        <?php if(isset($_SESSION['user'])): ?>
          <li class="nav-item">
            <span class="nav-link text-muted">
              <i class="bi bi-person-circle"></i>
              <?= $_SESSION['user']['username']; ?>
              <span class="badge" style="background-color: #000000;"><?= $_SESSION['user']['role']; ?></span>
            </span>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="logout.php">
              <i class="bi bi-box-arrow-right"></i> Logout
            </a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="btn btn-sm text-white" style="background-color: #5edf6b;" href="?page=login">
              <i class="bi bi-box-arrow-in-right"></i> Login
            </a>
          </li>
        <?php endif; ?>
      </ul>

    </div>
  </div>
</nav>