<header id="header" class="header fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="<?= $url; ?>" class="logo d-flex align-items-center">
      <img src="<?= $logo; ?>" alt="Logo <?= $title; ?>">
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <li>
          <a class="nav-link scrollto active" href="<?= $url; ?>#">
            <span class="bi bi-house-fill"></span> Beranda
          </a>
        </li>
        <li><a class="nav-link scrollto" href="<?= $url; ?>#team">Karyawan</a></li>
        <li class="dropdown"><a class="nav-link scrollto" href="<?= $url; ?>#services"><span>Pelayanan</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <?php foreach ($service as $row) : ?>
              <li>
                <a href="https://wa.me/62<?= $rowContact['no_telp']; ?>?text=Assalamu'alaikum, Halo <?= $title; ?> Saya Membutuhkan Layanan <?= $row["title"]; ?>"><?= $row["title"]; ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li class="dropdown"><a class="nav-link scrollto" href="<?= $url; ?>#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a class="nav-link scrollto" href="<?= $url; ?>#portfolio">Galeri</a></li>
            <li><a class="nav-link scrollto" href="<?= $url; ?>#about">Tentang</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="nav-link scrollto" href="<?= $url; ?>#satisfaction-survey"><span>Survei Kepuasan</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a class="nav-link scrollto" href="<?= $url; ?>#" data-bs-toggle="modal" data-bs-target="#modalSatisfactionSurvey">Beri Survei</a></li>
          </ul>
        </li>
        <li><a class="getstarted scrollto" href="<?= $url; ?>admin">Rekam Medis</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header>