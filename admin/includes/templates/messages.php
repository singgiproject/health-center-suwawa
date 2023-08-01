<main id="main" class="main">

  <div class="pagetitle">
    <h1><?= $pageTitle; ?></h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= $url; ?>dashboard">Home</a></li>
        <li class="breadcrumb-item active"><?= $pageTitle; ?></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- === DATA TABLE //START === -->
      <?php if (empty($_GET["reply"])) : ?>
        <div class="col-lg-12">
          <div class="row">

            <!-- Recent Sales -->
            <div class="col-12" id="code_access">

              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Data <span>| <?= $pageTitle; ?></span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Opsi</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Alamat Email</th>
                        <th scope="col">Nomor HP</th>
                        <th scope="col">Jenis Layanan</th>
                        <th scope="col">Deskripsi Pesan</th>
                        <th scope="col">Waktu Pengiriman</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $noTable = 1; ?>
                      <?php foreach ($messages as $row) : ?>
                        <tr>
                          <th scope="row"><a href="#"><?= $noTable; ?></a></th>
                          <td>
                            <a href="https://wa.me/62<?= $row["no_telp"]; ?>?text=<?php if ($time < "12") : ?>Selamat pagi<?php endif; ?><?php if ($time >= "12" && $time < "15") : ?>Selamat siang<?php endif; ?><?php if ($time >= "15" && $time < "19") : ?>Selamat sore<?php endif; ?><?php if ($time >= "19") : ?>Selamat malam<?php endif; ?> <?= $row["name"]; ?>, dengan saya <?= $rowSession["first_name"]; ?> dari LADKES. Ada yang bisa saya bantu terkait layanan <?= $row["service"]; ?> yang bapak/ibu pesan?" class="badge p-2 btn btn-success text-white mb-1" title="Balas Pesan Melalui WhatsApp"><i class="bi bi-whatsapp fs-6"></i></a>

                            <a href="#" class="badge p-2 btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#modalDeleteMessage<?= $row["id"]; ?>" title="Hapus"><i class="bi bi-trash fs-6"></i></a>

                          </td>
                          <td><?= $row["name"]; ?></td>
                          <td><?= $row["email"]; ?></td>
                          <td><?= $row["no_telp"]; ?></td>
                          <td><?= $row["service"]; ?></td>
                          <td><?= $row["description_message"]; ?></td>
                          <td><?= time_ago($row["date"]); ?></td>
                        </tr>
                        <?php $noTable++; ?>
                      <?php endforeach; ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->


          </div>
        </div>
        <!-- === DATA TABLE //END === -->
      <?php endif; ?>


      <!-- === ADD //START === -->
      <?php if ($_GET["reply"] === "message_whatsapp") : ?>
        <div class="col-lg-6">

          <a href="javascript:window.history.go(-1);" class="btn btn-light mb-2 bg-gradient shadow"><i class="bi bi-arrow-left"></i></a>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Balas Pesan Dari</h5>

              <!-- Custom Styled Validation -->
              <form action="" class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>
                <div class="col-md-12">
                  <table style="width: 100%;">
                    <tr>
                      <td>
                        <input name="description" id="description" autofocus class="form-control" placeholder="Ketik pesan">
                      </td>
                      <td>
                        <button class="btn bg-purple-1 text-white" type="submit" name="send_whatsapp" style="width: 100%;"><i class="bi bi-send-fill"></i> Kirim</button>
                      </td>
                    </tr>
                  </table>
                </div>
              </form><!-- End Custom Styled Validation -->

            </div>
          </div>

        </div>
      <?php endif; ?>
      <!-- === ADD //END === -->


    </div><!-- End Right side columns -->

    </div>
  </section>

</main><!-- End #main -->