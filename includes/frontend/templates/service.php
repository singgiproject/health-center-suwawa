<section id="services" class="values">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Pelayanan</h2>
      <p>Layanan Kami</p>
    </header>

    <div class="row justify-content-center">

      <?php foreach ($service as $row) : ?>
        <div class="col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
          <div class="box">
            <img src="assets/img/service/<?= $row["vector"]; ?>" class="img-fluid" alt="">
            <h3><?= $row["title"]; ?></h3>
            <p><?= $row["description"]; ?></p>
            <a href="https://wa.me/62<?= $rowContact['no_telp']; ?>?text=Assalamu'alaikum, Halo <?= $title; ?> Saya Membutuhkan Layanan <?= $row["title"]; ?>" class="btn-order">Hubungi Puskesmas</a>
          </div>
        </div>
      <?php endforeach; ?>

    </div>

  </div>

</section>