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
        <li class="breadcrumb-item">Pengaturan Aplikasi</li>
        <li class="breadcrumb-item active"><?= $pageTitle; ?></li>
      </ol>
    </nav>
  </div>
  <!-- end PAGE TITLE -->

  <section class="section dashboard">
    <div class="row">

      <!-- TABLE DATA ABOUT -->
      <div class="col-lg-12">
        <div class="row">

          <div class="col-12" id="code_access">

            <div class="card recent-sales overflow-auto">

              <div class="filter mx-4">
                <a href="#" class="btn bg-purple-1 text-white" data-bs-toggle="modal" data-bs-target="#modalAddAbout"><i class="bi bi-plus-circle"></i> Tambah Data</a>
              </div>

              <div class="card-body">
                <h5 class="card-title">Data <span>| <?= $pageTitle; ?></span></h5>

                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Opsi</th>
                      <th scope="col">Gambar</th>
                      <th scope="col">Deskripsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $noTable = 1; ?>
                    <?php foreach ($about as $row) : ?>
                      <tr>
                        <th scope="row"><a href="#"><?= $noTable; ?></a></th>
                        <td>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#modalEditAbout<?= $row["id"]; ?>" class="badge p-2 btn bg-purple-1 text-white mb-1" title="Ubah"><i class="bi bi-pencil-square fs-6"></i></a>
                          <a href="#" class="badge p-2 btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#modalDeleteAbout<?= $row["id"]; ?>" title="Hapus"><i class="bi bi-trash fs-6"></i></a>
                        </td>
                        <td>
                          <a href="<?= $url; ?>assets/img/about/<?= $row["image"]; ?>" target="_BLANK">
                            <img src="<?= $url; ?>assets/img/about/<?= $row["image"]; ?>" alt="Gambar <?= $row["image"]; ?>">
                          </a>
                        </td>
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
      <!-- end TABLE DATA ABOUT -->

      <!-- === MODAL ADD ABOUT=== -->
      <div class="modal fade" id="modalAddAbout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data <?= $pageTitle; ?></h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="" class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>

                <div class="col-md-12">
                  <label for="description" class="form-label">Deskripsi</label>
                  <textarea type="text" class="form-control" name="description" id="add_description_about" required placeholder="About"></textarea>
                  <div class="invalid-feedback">
                    Harap Berikan Deskripsi Tentang
                  </div>
                </div>

                <div class="col-md-12">
                  <label for="image" class="form-label">Foto</label>
                  <input type="file" class="form-control" id="image" name="image" required>
                  <div class="invalid-feedback">
                    Harap Berikan foto perusahaan atau instansi terkait
                  </div>
                  <small>
                    Format File : <strong>jpg, jpeg, png</strong> dengan ukuran Maks : <strong>1 MB</strong>
                  </small>
                </div>

                <input type="text" hidden name="date_insert" value="<?= $date; ?>">
                <input type="text" hidden name="date_update" value="">
                <input type="text" hidden name="type" value="insert">
                <div class="col-12">
                  <button class="btn bg-purple-1 text-white" type="submit" name="add_about"><i class="bi bi-save"></i> Simpan</button>
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
      <!-- === end MODAL ADD ABOUT=== -->


      <!-- === MODAL EDIT ABOUT=== -->
      <?php foreach ($about as $row) : ?>
        <div class="modal fade" id="modalEditAbout<?= $row["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data <?= $pageTitle; ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="" class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>
                  <input type="text" hidden name="id" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($row["id"]))))))))); ?>">
                  <input type="text" hidden name="old_file" value="<?= $row["image"]; ?>">

                  <div class="col-md-12">
                    <label for="edit_description_about<?= $row["id"]; ?>" class="form-label">Dekskripsi</label>
                    <textarea type="text" class="form-control" name="description" id="edit_description_about<?= $row["id"]; ?>" required placeholder="Tentang"><?= $row["description"]; ?></textarea>
                    <div class="invalid-feedback">
                      Harap Berikan Deskripsi Tentang
                    </div>
                  </div>

                  <div class="col-md-12">
                    <label for="image" class="form-label">Gambar Slide</label>
                    <br>
                    <img src="<?= $url; ?>assets/img/about/<?= $row["image"]; ?>" alt="Foto Instansi Terkait - <?= $row["image"]; ?>" width="60" class="mb-2">
                    <input type="file" class="form-control" id="image" name="image">
                    <small>Format File :
                      <strong>jpg, jpeg, png</strong> dengan ukuran Maks :
                      <strong>1 MB</strong>
                    </small>
                  </div>

                  <input type="text" hidden name="date_insert" value="<?= $row["date_insert"]; ?>">
                  <input type="text" hidden name="date_update" value="<?= $date; ?>">
                  <input type="text" hidden name="type" value="update">
                  <div class="col-12">
                    <button class="btn bg-purple-1 text-white" type="submit" name="edit_about"><i class="bi bi-save"></i> Simpan</button>
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
      <!-- === end MODAL EDIT ABOUT=== -->

      <!-- MODAL DELETE ABOUT -->
      <?php foreach ($about as $row) : ?>
        <div class="modal fade" id="modalDeleteAbout<?= $row["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <button type="submit" name="del_about" class="btn btn-danger">Hapus</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      <!-- end MODAL DELETE ABOUT -->

      <!-- === CONDITION DATA === -->
      <?php if (isset($_POST["add_about"])) : ?>
        <?php if (addAbout($_POST) > 0) : ?>
          <script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = '';
          </script>
        <?php endif; ?>
      <?php endif; ?>

      <?php if (isset($_POST["edit_about"])) : ?>
        <?php if (editAbout($_POST) > 0) : ?>
          <script>
            alert('Data Berhasil Diubah');
            document.location.href = '';
          </script>
        <?php endif; ?>
      <?php endif; ?>

      <?php if (isset($_POST["del_about"])) : ?>
        <?php if (deleteAbout($_POST["id"])) : ?>
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