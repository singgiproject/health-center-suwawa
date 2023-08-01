<section id="portfolio" class="portfolio">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Galeri</h2>
      <p>Cek pekerjaan terbaru kami</p>
    </header>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Semua</li>
          <?php foreach ($category as $row) : ?>
            <li data-filter=".filter-<?= preg_replace("/[^0-9]/", "", str_replace(" ","",$row["category"])); ?>"><?= $row["category"]; ?></li>
          <?php endforeach; ?>
          <!--<li data-filter="" class="filter-active">Lebih Banyak</li>-->
        </ul>
      </div>
    </div>

    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

      <?php foreach ($gallery as $row) : ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-<?= preg_replace("/[^0-9]/", "", str_replace(" ","",$row["category"])); ?>">
          <div class="portfolio-wrap">
            <img src="assets/img/gallery/<?= $row["image"]; ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?= $row["title"]; ?></h4>
              <p><?= $row["category"]; ?></p>
              <div class="portfolio-links">
                <a href="assets/img/gallery/<?= $row["image"]; ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?= $row["title"]; ?>"><i class="bi bi-plus"></i></a>
                <a href="<?= $url; ?>gallery/<?= $row["id"]; ?>" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>

  </div>

</section>