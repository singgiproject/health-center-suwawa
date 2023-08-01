<section id="about" class="about">

  <div class="container" id="hero" data-aos="fade-up">
    <div class="row gx-0">

      <div class="col-lg-6 d-flex align-items-center about-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/about/<?= $rowAbout["image"]; ?>?img=<?= time(); ?>" class="img-fluid animated" alt="">
      </div>

      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h3>Tentang Kami</h3>
          <h2><?= $title; ?> </h2>
          <p>
            <?= substr($rowAbout["description"], 0, 385); ?>
          </p>
          <div class="text-center text-lg-start">
            <a href="<?= $url; ?>page/about" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Selengkapnya</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>


    </div>
  </div>

</section>