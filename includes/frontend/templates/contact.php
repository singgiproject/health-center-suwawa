<?php

// ========== PATIENT TYPE (KARYAWAN PLN) ==========
if (isset($_POST["send_message"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $msgTemplateBorder = "-----------------------------------------------";
  $msgTemplateTitle = "PESAN BARU DARI - $name!";
  $msgTemplateName = "Nama Lengkap : $name";
  $msgTemplateEmail = "Alamat Email : $email";
  $msgTemplateSubject = "Subjek : $subject";
  $msgTemplateMessage = "Isi Pesan : $message";

  $messageText = "$msgTemplateBorder\n$msgTemplateTitle\n$msgTemplateBorder\n$msgTemplateName\n$msgTemplateEmail\n$msgTemplateSubject\n$msgTemplateMessage";

  // $secretToken = "5846388104:AAH_JusqnpFhmqj-Y4daqXr7Vd_9K5j0Lc8";
  // $urlBot = "https://api.telegram.org/bot" . $secretToken . "/sendMessage?parse_mode=markdown&chat_id=5470426761";

  $secretToken = "5863517328:AAGhP5G4e9WNsGAr2BNOuw6-227GZjJDVHA";
  $urlBot = "https://api.telegram.org/bot" . $secretToken . "/sendMessage?parse_mode=markdown&chat_id=5839469755";
  $urlBot = $urlBot . "&text=" . urlencode($messageText);
  $ch = curl_init();
  $optArray = array(
    CURLOPT_URL => $urlBot,
    CURLOPT_RETURNTRANSFER => true
  );
  curl_setopt_array($ch, $optArray);
  $result = curl_exec($ch);
  curl_close($ch);
}
// ========== end PATIENT TYPE (KARYAWAN PLN) ==========

?>
<section id="contact" class="contact">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Kontak</h2>
      <p>Kontak Kami</p>
    </header>

    <div class="row gy-4">

      <div class="col-lg-6">

        <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <p><?= $rowContact["alamat"]; ?></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-telephone"></i>
              <h3>Hubungi Kami</h3>
              <p><?= $rowContact["no_telp"]; ?></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-envelope"></i>
              <h3>Email Kami</h3>
              <p><?= $rowContact["email"]; ?></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-clock"></i>
              <h3>Jam Pelayanan</h3>
              <p><?= $rowContact["service_hours"]; ?></p>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-6">
        <form action="" method="post">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Nama Lengkap Kamu" required>
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Email Kamu" required>
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subjek" required>
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required></textarea>
            </div>

            <input hidden type="text" name="ip_user" value="<?= $ipUser; ?>">
            <input hidden type="text" name="date" value="<?= $dateEncode; ?>">
            <input hidden type="text" name="read_one_message" value="1">
            <input hidden type="text" name="read_all_message" value="1">

            <div class="col-md-12 text-center">
              <?php if (isset($_POST["send_message"])) : ?>
                <?php if (sendMessage($_POST) > 0) : ?>
                  <script>
                    document.location.href = '<?= $url; ?>#contact';
                  </script>
                  <div class="alert alert-success" role="alert">
                    Pesan anda berhasil dikirimkan!
                  </div>
                <?php endif; ?>
              <?php endif; ?>
              <button type="submit" name="send_message" class="btn btn-purple-1">Kirim Pesan</button>
            </div>

          </div>
        </form>

      </div>

    </div>

  </div>

</section>