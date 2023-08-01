<?php if ($rowSession["level"] === "doctor") : ?>
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
        <li class="breadcrumb-item">Halaman Aplikasi</li>
        <li class="breadcrumb-item active"><?= $pageTitle; ?></li>
      </ol>
    </nav>
  </div>
  <!-- End PAGE TITLE -->

  <section class="section dashboard">
    <div class="row">

      <!-- TABLE DATA TEAM -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Recent Sales -->
          <div class="col-12" id="code_access">

            <?php if ($rowServiceEnd["type"] === "insert") : ?>
              <?php if ($rowServiceEnd["date_insert"] === $date) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <i class="bi bi-check-circle me-1"></i>
                  1 Data berhasil ditambahkan!
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php endif; ?>
            <?php endif; ?>

            <?php if ($rowServiceEnd["type"] === "update") : ?>
              <?php if ($rowServiceEnd["date_update"] === $date) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <i class="bi bi-check-circle me-1"></i>
                  1 Data berhasil diubah!
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php endif; ?>
            <?php endif; ?>

            <div class="card recent-sales overflow-auto">

              <div class="filter mx-4">
                <a href="#" class="btn bg-purple-1 text-white" data-bs-toggle="modal" data-bs-target="#modalAddService"><i class="bi bi-plus-circle"></i> Tambah Data</a>
              </div>

              <div class="card-body">
                <h5 class="card-title">Data <span>| <?= $pageTitle; ?></span></h5>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Opsi</th>
                      <th scope="col">Gambar</th>
                      <th scope="col">Nama Layanan</th>
                      <th scope="col">Deskripsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $noTable = 1; ?>
                    <?php foreach ($service as $row) : ?>
                      <tr>
                        <th scope="row"><a href="#"><?= $noTable; ?></a></th>
                        <td>
                          <a href="#" class="badge p-2 btn bg-purple-1 text-white mb-1" title="Ubah" data-bs-toggle="modal" data-bs-target="#modalEditService<?= $row["id"]; ?>"><i class="bi bi-pencil-square fs-6"></i></a>
                          <a href="#" class="badge p-2 btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#modalDeleteService<?= $row["id"]; ?>" title="Hapus"><i class="bi bi-trash fs-6"></i></a>
                        </td>
                        <td>
                          <a href="<?= $url; ?>assets/img/service/<?= $row["vector"]; ?>" target="_BLANK">
                            <img src="<?= $url; ?>assets/img/service/<?= $row["vector"]; ?>" alt="Vector <?= $row["title"]; ?>" width="70">
                          </a>
                        </td>
                        <td><?= $row["title"]; ?></td>
                        <td><?= $row["description"]; ?></td>
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
      <!-- End TABLE DATA TEAM -->


      <!-- === MODAL ADD SERVICE=== -->
      <div class="modal fade" id="modalAddService" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data <?= $pageTitle; ?></h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="" class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>
                <div class="col-md-12">
                  <label for="title" class="form-label">Nama Layanan</label>
                  <input type="text" class="form-control" name="title" id="title" required placeholder="Nama Layanan">
                  <div class="invalid-feedback">
                    Harap Berikan Nama Layanan
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="service" class="form-label">Deskripsi</label>
                  <textarea name="description" id="service" class="form-control" required placeholder="Deskripsi Layanan"></textarea>
                  <div class="invalid-feedback">
                    Harap Berikan Deskripsi
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="vector" class="form-label">Gambar/Vector</label>
                  <input type="file" class="form-control" id="vector" name="vector" required>
                  <div class="invalid-feedback">
                    Harap Berikan Gambar/Vector yang menandakan judul layanan
                  </div>
                  <small>Format File :
                    <strong>jpg, jpeg, png, svg, webp</strong> dengan ukuran Maks :
                    <strong>500 KB</strong>
                  </small>
                </div>
                <input type="text" hidden name="date_insert" value="<?= $date; ?>">
                <input type="text" hidden name="date_update" value="">
                <input type="text" hidden name="type" value="insert">
                <div class="col-12">
                  <button class="btn bg-purple-1 text-white" type="submit" name="add_service"><i class="bi bi-save"></i> Simpan</button>
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
      <!-- === end MODAL ADD SERVICE === -->


      <!-- === MODAL EDIT SERVICE === -->
      <?php foreach ($service as $row) : ?>
        <div class="modal fade" id="modalEditService<?= $row["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data <?= $pageTitle; ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="" class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>
                  <input type="text" hidden name="id" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($row["id"]))))))))); ?>">
                  <input type="text" hidden name="old_file" value="<?= $row["vector"]; ?>">
                  <div class="col-md-12">
                    <label for="title" class="form-label">Nama Layanan</label>
                    <input type="text" class="form-control" name="title" id="title" required placeholder="Nama Layanan" value="<?= $row["title"]; ?>">
                    <div class="invalid-feedback">
                      Harap Berikan Nama Layanan
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label for="service" class="form-label">Deskripsi</label>
                    <textarea name="description" id="service" class="form-control" required placeholder="Deskripsi Layanan"><?= $row["description"]; ?></textarea>
                    <div class="invalid-feedback">
                      Harap Berikan Deskripsi
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label for="vector" class="form-label">Gambar/Vector</label>
                    <br>
                    <img src="<?= $url; ?>assets/img/service/<?= $row["vector"]; ?>" alt="Logo Service <?= $row["title"]; ?>" width="60" class="mb-2">
                    <input type="file" class="form-control" id="vector" name="vector">
                    <small>Format File :
                      <strong>jpg, jpeg, png, svg, webp</strong> dengan ukuran Maks :
                      <strong>500 KB</strong>
                    </small>
                  </div>
                  <input type="text" hidden name="date_insert" value="<?= $row["date_insert"]; ?>">
                  <input type="text" hidden name="date_update" value="<?= $date; ?>">
                  <input type="text" hidden name="type" value="update">
                  <div class="col-12">
                    <button class="btn bg-purple-1 text-white" type="submit" name="edit_service"><i class="bi bi-save"></i> Simpan</button>
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
      <!-- === end MODAL EDIT SERVICE === -->


      <!-- MODAL DELETE SERVICE -->
      <?php foreach ($service as $row) : ?>
        <div class="modal fade" id="modalDeleteService<?= $row["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <button type="submit" name="del_service" class="btn btn-danger">Hapus</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      <!-- end MODAL DELETE TEAM -->


      <!-- === CONDITION DATA === -->
      <?php if (isset($_POST["add_service"])) : ?>
        <?php if (addService($_POST) > 0) : ?>
          <script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = '';
          </script>
        <?php endif; ?>
      <?php endif; ?>

      <?php if (isset($_POST["edit_service"])) : ?>
        <?php if (editService($_POST) > 0) : ?>
          <script>
            alert('Data Berhasil Diubah');
            document.location.href = '';
          </script>
        <?php endif; ?>
      <?php endif; ?>

      <?php if (isset($_POST["del_service"])) : ?>
        <?php if (deleteService($_POST["id"])) : ?>
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