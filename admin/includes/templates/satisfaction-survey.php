<?php if ($levelSuperAdmin !== $rowSession["level"]) : ?>
  <script>
    document.location.href = '<?= $url; ?>admin/dashboard/home';
  </script>
<?php endif; ?>
<main id="main" class="main">

  <!-- PAGE TITLE -->
  <div class="pagetitle">
    <h1><?= $pageTitle; ?></h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= $url; ?>dashboard">Home</a></li>
        <li class="breadcrumb-item">Pasien</li>
        <li class="breadcrumb-item active"><?= $pageTitle; ?></li>
      </ol>
    </nav>
  </div>
  <!-- End PAGE TITLE -->

  <section class="section dashboard">
    <div class="row">

      <!-- TABLE DATA SATISFACTION SURVEY -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Recent Sales -->
          <div class="col-12" id="code_access">

            <?php if ($rowTeamEnd["type"] === "update") : ?>
              <?php if ($rowTeamEnd["date_update"] === $date) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <i class="bi bi-check-circle me-1"></i>
                  1 Data berhasil diubah!
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php endif; ?>
            <?php endif; ?>


            <div class="card recent-sales overflow-auto">

              <div class="card-body">
                <h5 class="card-title">Data <span>| <?= $pageTitle; ?></span></h5>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Opsi</th>
                      <th scope="col">Nama Lengkap</th>
                      <th scope="col">No. WA/HP</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Tingkat Kepuasan</th>
                      <th scope="col">Status Balasan</th>
                      <th scope="col">Terkirim</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $noTable = 1; ?>
                    <?php foreach ($satisfactionSurvey as $row) : ?>
                      <?php if (isset($_POST["send_wa"])) : ?>
                        <?php if (updateStatusReply($_POST) > 0) : ?>
                          <script>
                            document.location.href = 'https://wa.me/62<?= $_POST["no_hp"]; ?>&text=Terimakasih+bapak/ibu+<?= $_POST["name"]; ?>+telah+memberikan+survei+kepuasan+kepada+kami.+Survei+Kepuasan+anda+akan+menjadi+evaluasi+bagi+kami+untuk+melayani+pasien+lebih+baik+lagi';
                          </script>
                        <?php endif; ?>
                      <?php endif; ?>
                      <tr>
                        <th scope="row"><a href="#"><?= $noTable; ?></a></th>
                        <td>
                          <a href="#" class="badge p-2 btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#modalDeleteSatisfactionSurvey<?= $row["id"]; ?>" title="Hapus"><i class="bi bi-trash fs-6"></i></a>
                          <?php if ($row["status_reply"] === "0") : ?>
                            <form action="" method="post">
                              <input hidden type="text" name="name" value="<?= $row["name"]; ?>">
                              <input hidden type="text" name="no_hp" value="<?= $row["no_hp"]; ?>">
                              <input hidden type="text" name="id" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($row["id"]))))))))); ?>">
                              <input hidden type="text" name="status_reply" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode("1"))))))))); ?>">
                              <button type="submit" name="send_wa" class="btn btn-success text-center rounded-1 p-2 mt-1">
                                <i class="bi bi-whatsapp fs-6"></i>
                              </button>
                            </form>
                          <?php endif; ?>
                        </td>
                        <td><?= $row["name"]; ?></td>
                        <td><?= $row["no_hp"]; ?></td>
                        <td><?= $row["description"]; ?></td>
                        <td><?= $row["survey"]; ?></td>
                        <td>

                          <?php if ($row["status_reply"] === "0") : ?>
                            <div class="bg-warning status-reply" title="Belum Dibalas">
                              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            </div>
                          <?php endif; ?>

                          <?php if ($row["status_reply"] === "1") : ?>
                            <div class="bg-success status-reply" title="Balasan Terkirim">
                              <span class="bi bi-check fs-5 text-white" role="status"></span>
                            </div>
                          <?php endif; ?>

                        </td>
                        <td><?= time_ago($row["date"]); ?></td>
                      </tr>
                      <?php $noTable++; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>

              </div>

            </div>
          </div>


        </div>
      </div>
      <!-- end TABLE DATA SATISFACTION SURVEY -->

      <!-- MODAL DELETE SATISFACTION SURVEY -->
      <?php foreach ($satisfactionSurvey as $row) : ?>
        <div class="modal fade" id="modalDeleteSatisfactionSurvey<?= $row["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Anda yakin ingin menghapus data ini?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                <form action="" method="post">
                  <input type="text" name="id" hidden value="<?= $row["id"]; ?>">
                  <button type="submit" name="del_satisfaction_survey" class="btn btn-danger">Hapus</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      <!-- end MODAL DELETE SATISFACTION SURVEY -->


      <!-- === CONDITION DATA === -->
      <?php if (isset($_POST["del_satisfaction_survey"])) : ?>
        <?php if (deleteSatisfactionSurvey($_POST["id"])) : ?>
          <script>
            alert('Data Berhasil Dihapus');
            document.location.href = '';
          </script>
        <?php endif; ?>
      <?php endif; ?>


    </div>

    </div>
  </section>

</main>