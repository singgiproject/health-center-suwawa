<section id="hero" class="hero d-flex align-items-center">

  <div class="container">

    <div class="row title-hero">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Selamat Datang di <?= $title; ?></h1>
        <h2 data-aos="fade-up" data-aos-delay="100">
          Layanan Umum
          <br>
          Senin - Kamis : 08.00 s/d 12.00
          <br>
          Jumat - sabtu : 08:00 s/d 11.00
        </h2>
        <div data-aos="fade-up" data-aos-delay="100">
          <div class="text-center text-lg-start">
            <a href="#team" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Karyawan Puskesmas</span>
              <i class="fa-solid fa-user-doctor"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="100">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">

            <?php foreach ($carousel as $row) : ?>
              <div class="carousel-item <?= $row["active"]; ?>">
                <img src="assets/img/banner/<?= $row["background"]; ?>?img=<?= time(); ?>" class="d-block w-100 img-fluid animated" alt="Gambar <?= $title; ?>">
              </div>
            <?php endforeach; ?>

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-info me-5 rounded-circle" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-info ms-5 rounded-circle" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

    </div>

  </div>

</section>