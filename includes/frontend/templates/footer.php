<footer id="footer" class="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="" class="logo d-flex align-items-center">
            <img src="<?= $logo; ?>" alt="">
            <span><?= $title; ?></span>
          </a>
          <p>
            <?= substr($rowAbout["description"], 0, 385); ?>...
            <a href="about" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Selengkapnya</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </p>
          <div class="social-links mt-3">
            <a href="https://www.facebook.com/<?= $rowContact["facebook"]; ?>" class="facebook" title="Facebook - <?= $rowContact["facebook"]; ?>"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/<?= $rowContact["instagram"]; ?>" class="instagram" title="Instagram - @<?= $rowContact["instagram"]; ?>"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Layanan</h4>
          <ul>
            <?php foreach ($service as $row) : ?>
              <li><i class="bi bi-chevron-right"></i> <a href="https://wa.me/62<?= $rowContact['no_telp']; ?>?text=Assalamu'alaikum, Halo <?= $title; ?> Saya Membutuhkan Layanan <?= $row["title"]; ?>"><?= $row["title"]; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>


        <div class="col-lg-2 col-md-6 footer-contact text-center text-md-start">
          <h4>Alamat</h4>
          <p>
            <?= $rowContact["alamat"]; ?>
          </p>
        </div>

        <div class="col-lg-3 col-6 footer-links">
          <h4>Maps</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.57943456058!2d123.1363795!3d0.5342745!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x327ed5b296bf9839%3A0x1d731427bb9e82b2!2sPuskesmas%20Suwawa!5e0!3m2!1sid!2sid!4v1677822413221!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright
      <strong>
        <span>
          <a href="https://ahu.go.id/sabh/perseroan/qrcode/?kode=NDAyMjA5MDQ3NTEwMDcxMF8xXzA1IFNlcHRlbWJlciAyMDIyXzA1IFNlcHRlbWJlciAyMDIy">
            <?= $title; ?>
          </a>
        </span>
      </strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="<?= $url; ?>">Sri Novita Bumulo</a>
    </div>
  </div>
</footer>