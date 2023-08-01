<section id="services" class="values detail-gallery">

  <div class="container" data-aos="fade-up">

    <div class="row justify-content-center">

      <div class="col-lg-12 mt-5" data-aos="fade-up" data-aos-delay="200">
        <div class="box">
          <img src="<?= $url; ?>assets/img/about/<?= $rowAbout["image"]; ?>?img=<?= time(); ?>" class="img-fluid animated" alt="" width="70%">
          <h2><?= $title; ?> </h2>
          <p>
            <?= $rowAbout["description"]; ?>
          </p>
        </div>
      </div>

    </div>

  </div>

</section>