<main id="main" class="main">

  <!-- PAGE TITLE -->
  <div class="pagetitle">
    <h1><?= $pageTitle; ?></h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= $url; ?>dashboard">Home</a></li>
        <li class="breadcrumb-item">Halaman Aplikasi</li>
        <li class="breadcrumb-item active"><?= $pageTitle; ?></li>
      </ol>
    </nav>
  </div>
  <!-- End PAGE TITLE -->

  <section class="section dashboard">
    <div class="row">

      <!-- TABLE DATA BANNER CAROUSEL -->
      <div class="col-lg-12">
        <div class="row">

          <div class="col-12" id="code_access">

            <?php if ($rowcarouselEnd["type"] === "insert") : ?>
              <?php if ($rowcarouselEnd["date_insert"] === $date) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <i class="bi bi-check-circle me-1"></i>
                  1 Data berhasil ditambahkan!
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php endif; ?>
            <?php endif; ?>

            <?php if ($rowcarouselEnd["type"] === "update") : ?>
              <?php if ($rowcarouselEnd["date_update"] === $date) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <i class="bi bi-check-circle me-1"></i>
                  1 Data berhasil diubah!
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php endif; ?>
            <?php endif; ?>

            <div class="card recent-sales overflow-auto">

              <div class="filter mx-4">
                <a href="#" class="btn bg-purple-1 text-white" data-bs-toggle="modal" data-bs-target="#modalAddBannerCarousel"><i class="bi bi-plus-circle"></i> Tambah Data</a>
              </div>

              <div class="card-body">
                <h5 class="card-title">Data <span>| <?= $pageTitle; ?></span></h5>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Opsi</th>
                      <th scope="col">Gambar</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $noTable = 1; ?>
                    <?php foreach ($carousel as $row) : ?>
                      <tr>
                        <th scope="row"><a href="#">Slide <?= $noTable; ?></a></th>
                        <td>
                          <a href="#" class="badge p-2 btn bg-purple-1 text-white" title="Ubah" data-bs-toggle="modal" data-bs-target="#modalEditBannerCarousel<?= $row["id"]; ?>"><i class="bi bi-pencil-square fs-6"></i></a>
                          <a href="#" class="badge p-2 btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#modalDeleteBannerCarousel<?= $row["id"]; ?>" title="Hapus"><i class="bi bi-trash fs-6"></i></a>
                        </td>
                        <td>
                          <a href="<?= $url; ?>assets/img/banner/<?= $row["background"]; ?>" target="_BLANK">
                            <img src="<?= $url; ?>assets/img/banner/<?= $row["background"]; ?>" alt="Banner <?= $row["title"]; ?>" width="100">
                          </a>
                        </td>
                        <td><?= $row["active"]; ?></td>
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
      <!-- end TABLE DATA BANNER CAROUSEL -->


      <!-- === MODAL ADD BANNER CAROUSEL=== -->
      <div class="modal fade" id="modalAddBannerCarousel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data <?= $pageTitle; ?></h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="banner-carousel" class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>
                <div class="col-md-12">
                  <label for="background" class="form-label">Gambar Slide</label>
                  <input type="file" class="form-control" id="background" name="background" required>
                  <div class="invalid-feedback">
                    Harap Berikan Gambar Slide
                  </div>
                  <small>Format File :
                    <strong>jpg, jpeg, png</strong> dengan ukuran Maks :
                    <strong>1 MB</strong>
                  </small>
                </div>
                <div class="col-md-12">
                  <input type="radio" name="active" id="nonactive" value="" required>
                  <label for="nonactive" class="form-label">Tidak Aktif</label>

                  <input type="radio" name="active" id="active" value="active" required>
                  <label for="active" class="form-label">Aktif</label>
                  <div class="invalid-feedback">
                    Jika slide ini lebih dulu ditayangkan silahkan pilih <strong>Aktif</strong>
                  </div>
                </div>
                <input type="text" hidden name="date_insert" value="<?= $date; ?>">
                <input type="text" hidden name="date_update" value="">
                <input type="text" hidden name="type" value="insert">
                <div class="col-12">
                  <button class="btn bg-purple-1 text-white" type="submit" name="add_banner_carousel"><i class="bi bi-save"></i> Simpan</button>
                  <button class="btn btn-secondary" type="reset"><i class="bi bi-x-square"></i> Reset</button>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
          </div>
        </div>
      </div>
      <!-- === end MODAL ADD BANNER CAROUSEL === -->


      <!-- === MODAL EDIT BANNER CAROUSEL === -->
      <?php foreach ($carousel as $row) : ?>
        <div class="modal fade" id="modalEditBannerCarousel<?= $row["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data <?= $pageTitle; ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="banner-carousel" class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>
                  <input type="text" hidden name="id" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($row["id"]))))))))); ?>">
                  <input type="text" hidden name="old_file" value="<?= $row["background"]; ?>">
                  <div class="col-md-12">
                    <label for="background" class="form-label">Gambar Slide</label>
                    <br>
                    <img src="<?= $url; ?>assets/img/banner/<?= $row["background"]; ?>" alt="Logo Banner <?= $row["title"]; ?>" width="60" class="mb-2">
                    <input type="file" class="form-control" id="background" name="background">
                    <small>Format File :
                      <strong>jpg, jpeg, png</strong> dengan ukuran Maks :
                      <strong>1 MB</strong>
                    </small>
                  </div>
                  <div class="col-md-12">
                    <input type="radio" name="active" id="nonactive" value="" required>
                    <label for="nonactive" class="form-label">Tidak Aktif</label>

                    <input type="radio" name="active" id="active" value="active" required>
                    <label for="active" class="form-label">Aktif</label>
                    <div class="invalid-feedback">
                      Jika slide ini lebih dulu ditayangkan silahkan pilih <strong>Aktif</strong>
                    </div>
                    <br>
                    <small>Sebelumnya anda memilih
                      <?php if ($row["active"] === "active") : ?>
                        <strong>Aktif</strong>
                      <?php endif; ?>
                      <?php if ($row["active"] === "") : ?>
                        <strong>Tidak Aktif</strong>
                      <?php endif; ?>
                    </small>
                    <br>
                  </div>
                  <input type="text" hidden name="date_insert" value="<?= $row["date_insert"]; ?>">
                  <input type="text" hidden name="date_update" value="<?= $date; ?>">
                  <input type="text" hidden name="type" value="update">
                  <div class="col-12">
                    <button class="btn bg-purple-1 text-white" type="submit" name="edit_banner_carousel"><i class="bi bi-save"></i> Simpan</button>
                    <button class="btn btn-secondary" type="reset"><i class="bi bi-x-square"></i> Reset</button>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      <!-- === end MODAL EDIT BANNER CAROUSEL === -->

      <!-- MODAL DELETE BANNER CAROUSEL -->
      <?php foreach ($carousel as $row) : ?>
        <div class="modal fade" id="modalDeleteBannerCarousel<?= $row["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <button type="submit" name="del_banner_carousel" class="btn btn-danger">Hapus</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      <!-- end MODAL DELETE BANNER CAROUSEL -->


      <!-- === CONDITION DATA === -->
      <?php if (isset($_POST["add_banner_carousel"])) : ?>
        <?php if (addBannerCarousel($_POST) > 0) : ?>
          <script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = '';
          </script>
        <?php endif; ?>
      <?php endif; ?>

      <?php if (isset($_POST["edit_banner_carousel"])) : ?>
        <?php if (editBannerCarousel($_POST) > 0) : ?>
          <script>
            alert('Data Berhasil Diubah');
            document.location.href = '';
          </script>
        <?php endif; ?>
      <?php endif; ?>

      <?php if (isset($_POST["del_banner_carousel"])) : ?>
        <?php if (deleteBannerCarousel($_POST["id"])) : ?>
          <script>
            alert('Data Berhasil Dihapus');
            document.location.href = '';
          </script>
        <?php endif; ?>
      <?php endif; ?>


    </div><!-- End Right side columns -->

    </div>
  </section>

</main><!-- End #main -->