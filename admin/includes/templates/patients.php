<main id="main" class="main">

  <!-- PAGE TITLE -->
  <div class="pagetitle">
    <h1><?= $pageTitle; ?></h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= $url; ?>dashboard">Home</a></li>
        <li class="breadcrumb-item">Pasien</li>
        <li class="breadcrumb-item active">Data <?= $pageTitle; ?></li>
      </ol>
    </nav>
  </div>
  <!-- PAGE TITLE -->

  <?php if ($_GET["pages"] === "patients" or $_GET["pages"] === "patients-add-success" or $_GET["pages"] === "patients-edit-success" or $_GET["pages"] === "patients-deleted-success") : ?>
    <!-- ====================================
       TEMPLATE PATIENTS 
       ===================================-->
    <section class="section dashboard">
      <div class="row">

        <!-- TABLE DATA PATIENTS  -->
        <div class="col-lg-12">
          <div class="row">

            <div class="col-12" id="code_access">

              <div class="card recent-sales overflow-auto">

                <?php if ($rowSession["level"] === $levelSuperAdmin or $rowSession["level"] === $levelStaff) : ?>
                  <div class="filter mx-4">
                    <a href="#" class="btn bg-purple-1 text-white" data-bs-toggle="modal" data-bs-target="#modalAddDataPatients"><i class="bi bi-plus-circle"></i> Tambah Data</a>
                  </div>
                <?php endif; ?>

                <div class="card-body">
                  <h5 class="card-title">
                    <strong>Data <?= $pageTitle; ?>
                      (<?= $resultPatient["countPatient"]; ?> Data)
                    </strong>
                  </h5>

                  <!-- Notification Add Success -->
                  <?php if ($_GET["pages"] === "patients-add-success") : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Sukses!</strong> 1 Data Berhasil Ditambahkan
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  <?php endif; ?>

                  <!-- Notification Edit Success -->
                  <?php if ($_GET["pages"] === "patients-edit-success") : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Sukses!</strong> 1 Data Berhasil Diubah
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  <?php endif; ?>

                  <!-- Notification Deleted Success -->
                  <?php if ($_GET["pages"] === "patients-deleted-success") : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Sukses!</strong> 1 Data Berhasil Dihapus
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  <?php endif; ?>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <?php if ($rowSession["level"] === $levelSuperAdmin or $rowSession["level"] === $levelStaff) : ?>
                          <th scope="col">Opsi</th>
                        <?php endif; ?>
                        <th scope="col">No. Rekam Medis</th>
                        <th scope="col">No. Kartu Jaminan</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Nama KK</th>
                        <th scope="col">Tempat Tgl Lahir/Umur</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">No. Hp</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Riwayat Alergi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $noTable = 1; ?>
                      <?php foreach ($patients as $rowPatients) : ?>


                        <tr>
                          <th scope="row"><a href="#"><?= $noTable; ?></a></th>

                          <?php if ($rowSession["level"] === $levelSuperAdmin or $rowSession["level"] === $levelStaff) : ?>
                            <td>
                              <a href="#" class="badge p-2 btn bg-purple-1 text-white mb-1" title="Ubah" data-bs-toggle="modal" data-bs-target="#modalEditDataPatients<?= $rowPatients["id"]; ?>">
                                <i class="bi bi-pencil-square fs-6"></i>
                              </a>
                              <a href="#" class="badge p-2 btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#modalDeleteDataPatients<?= $rowPatients["id"]; ?>" title="Hapus"><i class="bi bi-trash fs-6"></i></a>
                              <!-- Example single danger button -->
                            </td>
                          <?php endif; ?>

                          <td><?= $rowPatients["no_rekam_medis"]; ?></td>
                          <td><?= $rowPatients["no_kartu_jaminan"]; ?></td>
                          <td><?= $rowPatients["nama_pasien"]; ?></td>
                          <td><?= $rowPatients["jenis_kelamin"]; ?></td>
                          <td><?= $rowPatients["nama_kk"]; ?></td>
                          <td><?= $rowPatients["tempat_lahir"]; ?>/<?= date_id($rowPatients["tgl_lahir"]); ?></td>
                          <td><?= $rowPatients["pendidikan"]; ?></td>
                          <td><?= $rowPatients["pekerjaan"]; ?></td>
                          <td><?= $rowPatients["no_hp"]; ?></td>
                          <td><?= $rowPatients["agama"]; ?></td>
                          <td><?= $rowPatients["alamat"]; ?></td>
                          <td><?= $rowPatients["riwayat_alergi"]; ?></td>
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
        <!-- TABLE DATA PATIENTS -->


        <?php if ($rowSession["level"] === $levelSuperAdmin or $rowSession["level"] === $levelStaff) : ?>
          <!-- === MODAL ADD PATIENTS === -->
          <div class="modal fade" id="modalAddDataPatients" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data <?= $pageTitle; ?></h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="d-grid gap-2 col-12 mx-auto">
                    <form action="" class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>
                      <div class="col-md-12 mb-2" hidden>
                        <input type="text" hidden name="date_send" value="<?= $dateEncode; ?>">
                      </div>

                      <div class="col-md-12 mb-2">
                        <label for="no_rekam_medis" class="form-label">Nomor Rekam Medis</label>
                        <input type="text" class="form-control" name="no_rekam_medis" id="no_rekam_medis" maxlength="6" minlength="6" required placeholder="Masukan nomor rekam medis">
                        <div class="invalid-feedback">
                          Nomor Rekam Medis Tidak Valid
                        </div>
                      </div>

                      <div class="col-md-12 mb-2">
                        <label for="no_kartu_jaminan" class="form-label">Nomor Kartu Jaminan</label>
                        <input type="text" class="form-control" name="no_kartu_jaminan" id="no_kartu_jaminan" placeholder="Nomor Kartu Jaminan">
                        <div class="invalid-feedback">
                          Harap Masukan Nomor Kartu Jaminan
                        </div>
                      </div>

                      <div class="col-md-12 mb-2">
                        <label for="nama_pasien" class="form-label">Nama Pasien</label>
                        <input type="text" class="form-control" name="nama_pasien" id="nama_pasien" required placeholder="Masukan Nama Pasien">
                        <div class="invalid-feedback">
                          Harap Masukan Nama Pasien
                        </div>
                      </div>

                      <div class="col-md-12 mb-2">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki" id="man_patient" required>
                          <label class="form-check-label" for="man_patient">
                            Laki-Laki
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="woman_patient" required>
                          <label class="form-check-label" for="woman_patient">
                            Perempuan
                          </label>
                          <div class="invalid-feedback">
                            Harap berikan jenis kelamin
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12 mb-2">
                        <label for="nama_kk" class="form-label">Nama KK</label>
                        <input type="text" class="form-control" name="nama_kk" id="nama_kk" placeholder="Masukan nama KK">
                        <div class="invalid-feedback">
                          Harap Masukan Nama KK
                        </div>
                      </div>

                      <div class="col-md-12 mb-2">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" required placeholder="Masukan Tempat Lahir">
                        <div class="invalid-feedback">
                          Harap Masukan Tempat Lahir
                        </div>
                      </div>

                      <div class="col-md-12 mb-2">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required placeholder="Masukan Tanggal Lahir">
                        <div class="invalid-feedback">
                          Harap Masukan Tanggal Lahir
                        </div>
                      </div>

                      <div class="col-md-12 mb-2">
                        <label for="pendidikan" class="form-label">Pendidikan</label>
                        <input type="text" class="form-control" name="pendidikan" id="pendidikan" placeholder="Masukan Pendidikan">
                        <div class="invalid-feedback">
                          Harap Masukan Pendidikan
                        </div>
                      </div>

                      <div class="col-md-12 mb-2">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Masukan Pekerjaan">
                        <div class="invalid-feedback">
                          Harap Masukan Pekerjaan
                        </div>
                      </div>

                      <div class="col-md-12 mb-2">
                        <label for="no_hp" class="form-label">Nomor HP</label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor HP" minlength="8" maxlength="15">
                        <div class="invalid-feedback">
                          Harap Masukan Nomor HP
                        </div>
                      </div>

                      <div class="col-md-12 mb-2">
                        <label for="agama" class="form-label">Agama</label>
                        <select name="agama" id="agama" class="form-control" required>
                          <option value="">--- Pilih ---</option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Katolik">Katolik</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Budha">Budha</option>
                          <option value="Konghucu">Konghucu</option>
                        </select>
                        <div class="invalid-feedback">
                          Harap Pilih Agama
                        </div>
                      </div>

                      <div class="col-md-12 mb-2">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" required placeholder="Masukan Alamat" minlength="3"></textarea>
                        <div class="invalid-feedback">
                          Harap Masukan Alamat
                        </div>
                      </div>

                      <div class="col-md-12 mb-2">
                        <label for="riwayat_alergi" class="form-label">Riwayat Alergi</label>
                        <input type="text" class="form-control" name="riwayat_alergi" id="riwayat_alergi" placeholder="Masukan Riwayat Alergi">
                        <div class="invalid-feedback">
                          Harap Masukan Riwayat Alergi
                        </div>
                      </div>

                      <div class="col-12">
                        <button class="btn bg-purple-1 text-white" type="submit" name="send_patients"><i class="bi bi-save"></i> Simpan</button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                </div>
              </div>
            </div>
          </div>
          <!-- === end MODAL ADD PATIENTS=== -->


          <!-- === MODAL EDIT PATIENTS=== -->
          <?php foreach ($patients as $rowPatients) : ?>
            <div class="modal fade" id="modalEditDataPatients<?= $rowPatients["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data <?= $pageTitle; ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="d-grid gap-2 col-12 mx-auto">
                      <form action="" class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>
                        <div class="col-md-12 mb-2" hidden>
                          <input type="text" hidden name="id" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($rowPatients["id"]))))))))); ?>">
                          <input type="text" hidden name="date_send" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($rowPatients["date_send"]))))))))); ?>">
                        </div>

                        <div class="col-md-12 mb-2">
                          <label for="no_rekam_medis" class="form-label">Nomor Rekam Medis</label>
                          <input type="text" class="form-control" name="no_rekam_medis" id="no_rekam_medis" maxlength="6" minlength="6" required placeholder="Masukan nomor rekam medis" value="<?= $rowPatients["no_rekam_medis"]; ?>">
                          <div class="invalid-feedback">
                            Nomor Rekam Medis Tidak Valid
                          </div>
                        </div>

                        <div class="col-md-12 mb-2">
                          <label for="no_kartu_jaminan" class="form-label">Nomor Kartu Jaminan</label>
                          <input type="text" class="form-control" name="no_kartu_jaminan" id="no_kartu_jaminan" placeholder="Nomor Kartu Jaminan" value="<?= $rowPatients["no_kartu_jaminan"]; ?>">
                          <div class="invalid-feedback">
                            Harap Masukan Nomor Kartu Jaminan
                          </div>
                        </div>

                        <div class="col-md-12 mb-2">
                          <label for="nama_pasien" class="form-label">Nama Pasien</label>
                          <input type="text" class="form-control" name="nama_pasien" id="nama_pasien" required placeholder="Masukan Nama Pasien" value="<?= $rowPatients["nama_pasien"]; ?>">
                          <div class="invalid-feedback">
                            Harap Masukan Nama Pasien
                          </div>
                        </div>

                        <div class="col-md-12 mb-2">
                          <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki" id="man_patient" required <?php if ($rowPatients["jenis_kelamin"] === "Laki-Laki") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="man_patient">
                              Laki-Laki
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="woman_patient" required <?php if ($rowPatients["jenis_kelamin"] === "Perempuan") : ?> checked <?php endif; ?>>
                            <label class="form-check-label" for="woman_patient">
                              Perempuan
                            </label>
                            <div class="invalid-feedback">
                              Harap berikan jenis kelamin
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12 mb-2">
                          <label for="nama_kk" class="form-label">Nama KK</label>
                          <input type="text" class="form-control" name="nama_kk" id="nama_kk" placeholder="Masukan nama KK" value="<?= $rowPatients["nama_kk"]; ?>">
                          <div class="invalid-feedback">
                            Harap Masukan Nama KK
                          </div>
                        </div>

                        <div class="col-md-12 mb-2">
                          <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                          <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" required placeholder="Masukan Tempat Lahir" value="<?= $rowPatients["tempat_lahir"]; ?>">
                          <div class="invalid-feedback">
                            Harap Masukan Tempat Lahir
                          </div>
                        </div>

                        <div class="col-md-12 mb-2">
                          <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                          <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required placeholder="Masukan Tanggal Lahir" value="<?= $rowPatients["tgl_lahir"]; ?>">
                          <div class="invalid-feedback">
                            Harap Masukan Tanggal Lahir
                          </div>
                        </div>

                        <div class="col-md-12 mb-2">
                          <label for="pendidikan" class="form-label">Pendidikan</label>
                          <input type="text" class="form-control" name="pendidikan" id="pendidikan" placeholder="Masukan Pendidikan" value="<?= $rowPatients["pendidikan"]; ?>">
                          <div class="invalid-feedback">
                            Harap Masukan Pendidikan
                          </div>
                        </div>

                        <div class="col-md-12 mb-2">
                          <label for="pekerjaan" class="form-label">Pekerjaan</label>
                          <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Masukan Pekerjaan" value="<?= $rowPatients["pekerjaan"]; ?>">
                          <div class=" invalid-feedback">
                            Harap Masukan Pekerjaan
                          </div>
                        </div>

                        <div class="col-md-12 mb-2">
                          <label for="no_hp" class="form-label">Nomor HP</label>
                          <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor HP" value="<?= $rowPatients["no_hp"]; ?>">
                          <div class="invalid-feedback">
                            Harap Masukan Nomor HP
                          </div>
                        </div>

                        <div class="col-md-12 mb-2">
                          <label for="agama" class="form-label">Agama</label>
                          <select name="agama" id="agama" class="form-control" required>
                            <option value="">--- Pilih ---</option>
                            <option value="Islam" <?php if ($rowPatients["agama"] === "Islam") : ?>selected<?php endif; ?>>Islam</option>
                            <option value="Kristen" <?php if ($rowPatients["agama"] === "Kristen") : ?>selected<?php endif; ?>>Kristen</option>
                            <option value="Katolik" <?php if ($rowPatients["agama"] === "Katolik") : ?>selected<?php endif; ?>>Katolik</option>
                            <option value="Hindu" <?php if ($rowPatients["agama"] === "Hindu") : ?>selected<?php endif; ?>>Hindu</option>
                            <option value="Budha" <?php if ($rowPatients["agama"] === "Budha") : ?>selected<?php endif; ?>>Budha</option>
                            <option value="Konghucu" <?php if ($rowPatients["agama"] === "Konghucu") : ?>selected<?php endif; ?>>Konghucu</option>
                          </select>
                          <div class="invalid-feedback">
                            Harap Pilih Agama
                          </div>
                        </div>

                        <div class="col-md-12 mb-2">
                          <label for="alamat" class="form-label">Alamat</label>
                          <textarea class="form-control" name="alamat" id="alamat" required placeholder="Masukan Alamat" minlength="3"><?= $rowPatients["alamat"]; ?></textarea>
                          <div class="invalid-feedback">
                            Harap Masukan Alamat
                          </div>
                        </div>

                        <div class="col-md-12 mb-2">
                          <label for="riwayat_alergi" class="form-label">Riwayat Alergi</label>
                          <input type="text" class="form-control" name="riwayat_alergi" id="riwayat_alergi" placeholder="Masukan Riwayat Alergi" value="<?= $rowPatients["riwayat_alergi"]; ?>">
                          <div class="invalid-feedback">
                            Harap Masukan Riwayat Alergi
                          </div>
                        </div>

                        <div class="col-12">
                          <button class="btn bg-purple-1 text-white" type="submit" name="update_patients"><i class="bi bi-save"></i> Simpan</button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <!-- === end MODAL EDIT PATIENTS=== -->

          <!-- MODAL DELETE PATIENTS -->
          <?php foreach ($patients as $rowPatients) : ?>
            <div class="modal fade" id="modalDeleteDataPatients<?= $rowPatients["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      <input type="text" name="id" hidden value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($rowPatients["id"]))))))))); ?>">
                      <button type="submit" name="del_patients" class="btn btn-danger">Hapus</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <!-- end MODAL DELETE PATIENTS -->
        <?php endif; ?>

      </div>

      </div>
    </section>
    <!-- ====================================
       end TEMPLATE PATIENTS 
       ===================================-->
  <?php endif; ?>

</main>

<?php if ($rowSession["level"] === $levelSuperAdmin or $rowSession["level"] === $levelStaff) : ?>

  <!-- === CONDITION DATA PATIENTS=== -->
  <?php if (isset($_POST["send_patients"])) : ?>
    <?php if (sendPatients($_POST) > 0) : ?>
      <script>
        document.location.href = '<?= $url; ?>admin/dashboard/patients-add-success';
      </script>
    <?php endif; ?>
  <?php endif; ?>

  <?php if (isset($_POST["update_patients"])) : ?>
    <?php if (updatePatients($_POST) > 0) : ?>
      <script>
        document.location.href = '<?= $url; ?>admin/dashboard/patients-edit-success';
      </script>
    <?php endif; ?>
  <?php endif; ?>

  <?php if (isset($_POST["del_patients"])) : ?>
    <?php if (deletePatients(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST["id"]))))))))))) : ?>
      <script>
        document.location.href = '<?= $url; ?>admin/dashboard/patients-deleted-success';
      </script>
    <?php endif; ?>
  <?php endif; ?>

<?php endif; ?>