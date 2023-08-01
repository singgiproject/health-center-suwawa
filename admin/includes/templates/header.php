<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="<?= $url; ?>admin" class="logo d-flex align-items-center">
      <img src="<?= $logo; ?>" alt="Logo <?= $title; ?>">
      <h6><?= $title; ?></h6>
    </a>
    <i class=" bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->


  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">


      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="<?= $url; ?>assets/img/users/<?= $rowSession["gambar"]; ?>" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2"><?= $rowSession["first_name"]; ?> <?= $rowSession["last_name"]; ?></span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6><?= $rowSession["first_name"]; ?> <?= $rowSession["last_name"]; ?></h6>
            <?php if ($levelSuperAdmin === $rowSession["level"]) : ?>
              <span>Super Admin</span>
            <?php endif; ?>

            <?php if ($levelStaff === $rowSession["level"]) : ?>
              <span>Staf</span>
            <?php endif; ?>

            <?php if ($levelDoctor === $rowSession["level"]) : ?>
              <span>Dokter</span>
            <?php endif; ?>

          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header>