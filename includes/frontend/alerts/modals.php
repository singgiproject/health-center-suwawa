<!-- Modal Search -->
<div class="modal fade" id="modalSearch" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- <form action="" method="get">
          <div class="input-group mb-3">
            <input type="text" name="q" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Cari..">
            <button type="submit" name="search" style="border: none;">
              <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-search"></i></span>
            </button>
          </div>
        </form> -->
        <h3>
          <center>Fitur Pencarian Masih Dalam Perbaikan Oleh Developer Kami</center>
        </h3>
      </div>
    </div>
  </div>
</div>


<!-- Modal Satisfaction Survey -->
<div class="modal fade" id="modalSatisfactionSurvey" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Berikan Tanggapan Anda Tentang <?= $title;?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <?php if (isset($_POST["send_satisfaction_survey_mobile"])) : ?>
          <?php if (sendSatisfactionSurvey($_POST) > 0) : ?>
            <script>
              alert('Terimakasih telah memberikan tanggapan anda kepada kami.');
            </script>
            <div class="alert alert-success" role="alert">
              Terimakasih telah memberikan tanggapan anda kepada kami.
            </div>
          <?php endif; ?>
        <?php endif; ?>

        <form action="" method="post">
          <div class="col-md-12 mb-2">
            <label for="name_satisfaction_survey" class="form-label"><i class="bi bi-people"></i> Nama Lengkap</label>
            <input type="text" class="form-control" name="name" id="name_satisfaction_survey" required placeholder="Masukan nama lengkap anda">
          </div>

          <div class="col-md-12 mb-2">
            <label for="no_hp_satisfaction_survey" class="form-label"><i class="bi bi-telephone"></i> Nomor HP/WA</label>
            <input type="number" class="form-control" name="no_hp" id="no_hp_satisfaction_survey" required placeholder="Nomor HP atau WA" min="0">
          </div>

          <div class="col-md-12 mb-2">
            <label for="description_satisfaction_survey" class="form-label"><i class="bi bi-list"></i> Kritik dan Saran</label>
            <textarea type="text" class="form-control" name="description" id="description_satisfaction_survey" required></textarea>
          </div>

          <div class="col-12 mb-2 radio-satisfaction-survey">
            <input type="radio" class="btn-check" name="survey" id="satisfied_satisfaction_survey" autocomplete="off" value="Puas">
            <label class="btn btn-outline-success" for="satisfied_satisfaction_survey">
              <i class="bi bi-emoji-laughing-fill"></i> Puas
            </label>

            <input type="radio" class="btn-check" name="survey" id="less_satisfied_satisfaction_survey" autocomplete="off" value="Kurang Puas">
            <label class="btn btn-outline-secondary" for="less_satisfied_satisfaction_survey">
              <i class="bi bi-emoji-neutral-fill"></i> Kurang Puas
            </label>

            <input type="radio" class="btn-check" name="survey" id="not_satisfied_satisfaction_survey" autocomplete="off" value="Tidak Puas">
            <label class="btn btn-outline-danger" for="not_satisfied_satisfaction_survey">
              <i class="bi bi-emoji-frown-fill"></i> Tidak Puas
            </label>
          </div>
          <input type="text" hidden name="status_reply" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode("0"))))))))); ?>">

          <input type="text" hidden name="date" value="<?= $dateEncode; ?>">

          <div class="col-12">
            <p>Survei kepuasan dari anda akan menjadi evaluasi bagi kami untuk melayani pasien lebih baik lagi.</p>
          </div>

          <div class="col-12">
            <button class="btn btn-purple-1 mt-2" type="submit" name="send_satisfaction_survey_mobile">Kirim Survei Kepuasan</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>