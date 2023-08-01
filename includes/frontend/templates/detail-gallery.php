<section id="services" class="values detail-gallery">

  <div class="container" data-aos="fade-up">

    <div class="row justify-content-center">

      <div class="col-lg-12 mt-5" data-aos="fade-up" data-aos-delay="200">
        <div class="box">
          <img src="<?= $url; ?>assets/img/gallery/<?= $queryGalery["image"]; ?>" class="img-fluid" alt="" width="400">
          <h3><?= $queryGalery["title"]; ?></h3>
          <p>
            <center><?= $queryGalery["description"]; ?></center>
          </p>
        </div>
      </div>

    </div>

  </div>

</section>