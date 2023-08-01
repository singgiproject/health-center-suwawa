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
  <!-- PAGE TITLE -->

  <?php if ($_GET["pages"] === "medical-records" or $_GET["pages"] === "medical-records-add-success" or $_GET["pages"] === "medical-records-edit-success" or $_GET["pages"] === "medical-records-deleted-success") : ?>
    <!-- ====================================
       TEMPLATE MEDICAL RECORDS 
       ===================================-->
    <section class="section dashboard">
      <div class="row">

        <div class="row mb-3">
          <div class="col-md-6">
            <div class="list-group" id="list-tab" role="tablist">
              <table>
                <tr>
                  <td>
                    <a class="list-group-item list-group-item-action active rounded-2" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Sudah Ada Rekam Medis</a>
                  </td>
                  <td>
                    <a class="list-group-item list-group-item-action rounded-2" id="list-empty-list" data-bs-toggle="list" href="#list-empty" role="tab" aria-controls="list-empty">Belum Ada Rekam Medis</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>


        <div class="tab-content" id="nav-tabContent">

          <!-- TABLE DATA MEDICAL RECORDS  -->
          <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <div class="col-lg-12">
              <div class="row">

                <div class="col-12" id="code_access">

                  <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                      <h5 class="card-title">
                        <strong>Data <?= $pageTitle; ?></strong>
                      </h5>

                      <!-- Notification Add Success -->
                      <?php if ($_GET["pages"] === "medical-records-add-success") : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Sukses!</strong> 1 Data Berhasil Ditambahkan
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      <?php endif; ?>

                      <!-- Notification Edit Success -->
                      <?php if ($_GET["pages"] === "medical-records-edit-success") : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Sukses!</strong> 1 Data Berhasil Diubah
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      <?php endif; ?>

                      <!-- Notification Deleted Success -->
                      <?php if ($_GET["pages"] === "medical-records-deleted-success") : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Sukses!</strong> 1 Data Berhasil Dihapus
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      <?php endif; ?>

                      <table class="table table-borderless datatable">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Opsi</th>
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
                            <?php
                            $noRekamMedis = $rowPatients["no_rekam_medis"];
                            $resultMedicalRecords = mysqli_query($conn, "SELECT no_rekam_medis FROM tb_medical_records WHERE no_rekam_medis = '$noRekamMedis' ");
                            ?>
                            <?php if (mysqli_fetch_assoc($resultMedicalRecords)) : ?>
                              <tr>
                                <th scope="row"><a href="#"><?= $noTable; ?></a></th>
                                <td>
                                  <a href="#" class="badge p-2 btn bg-primary text-white mb-1" title="Lihat Rekam Medis" data-bs-toggle="modal" data-bs-target="#modalViewMedicalRecords<?= $rowPatients["id"]; ?>">
                                    <i class="bi bi-eye fs-6"></i>
                                  </a>

                                  <?php if ($rowSession["level"] === $levelSuperAdmin or $rowSession["level"] === $levelDoctor) : ?>
                                    <a href="#" class="badge p-2 btn bg-purple-1 text-white mb-1" title="Buat Kunjungan" data-bs-toggle="modal" data-bs-target="#modalAddMedicalRecords<?= $rowPatients["id"]; ?>">
                                      <i class="bi bi-pencil-square fs-6"></i>
                                    </a>
                                  <?php endif; ?>

                                  <a type="button" class="btn btn-info badge p-2 fs-5 mt-1 text-white dropdown-toggle" data-bs-toggle="dropdown">
                                  </a>
                                  <ul class="dropdown-menu">
                                    <li>
                                      <form action="<?= $url; ?>admin/print/medical-record" method="post">
                                        <input type="text" hidden name="no_rekam_medis" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($rowPatients["no_rekam_medis"]))))))))); ?>">
                                        <button type="submit" name="print" class="dropdown-item status-patient-true" href="#">Rekam Medis (PDF)</button>
                                      </form>
                                    </li>
                                    <li>
                                      <form action="<?= $url; ?>admin/print/card-control" method="post">
                                        <input type="text" hidden name="no_rekam_medis" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($rowPatients["no_rekam_medis"]))))))))); ?>">
                                        <button type="submit" name="submit_patient_status" class="dropdown-item status-patient-bingo" href="#">Kartu Kontrol Pasien (PDF)</button>
                                      </form>
                                    </li>
                                  </ul>
                                </td>
                                <td><?= $rowPatients["no_rekam_medis"]; ?></td>
                                <td>
                                  <?php if (empty($rowPatients["no_kartu_jaminan"])) : ?>
                                    -
                                  <?php endif; ?>
                                  <?php if (!empty($rowPatients["no_kartu_jaminan"])) : ?>
                                    <?= $rowPatients["no_kartu_jaminan"]; ?>
                                  <?php endif; ?>
                                </td>
                                <td><?= $rowPatients["nama_pasien"]; ?></td>
                                <td><?= $rowPatients["jenis_kelamin"]; ?></td>
                                <td>
                                  <?php if (empty($rowPatients["nama_kk"])) : ?>
                                    -
                                  <?php endif; ?>
                                  <?php if (!empty($rowPatients["nama_kk"])) : ?>
                                    <?= $rowPatients["nama_kk"]; ?>
                                  <?php endif; ?>
                                </td>
                                <td><?= $rowPatients["tempat_lahir"]; ?>/<?= date_id($rowPatients["tgl_lahir"]); ?></td>
                                <td><?= $rowPatients["pendidikan"]; ?></td>
                                <td>
                                  <?php if (empty($rowPatients["pekerjaan"])) : ?>
                                    -
                                  <?php endif; ?>
                                  <?php if (!empty($rowPatients["pekerjaan"])) : ?>
                                    <?= $rowPatients["pekerjaan"]; ?>
                                  <?php endif; ?>
                                </td>
                                <td>
                                  <?php if (empty($rowPatients["no_hp"])) : ?>
                                    -
                                  <?php endif; ?>
                                  <?php if (!empty($rowPatients["no_hp"])) : ?>
                                    <?= $rowPatients["no_hp"]; ?>
                                  <?php endif; ?>
                                </td>
                                <td><?= $rowPatients["agama"]; ?></td>
                                <td><?= $rowPatients["alamat"]; ?></td>
                                <td>
                                  <?php if (empty($rowPatients["riwayat_alergi"])) : ?>
                                    -
                                  <?php endif; ?>
                                  <?php if (!empty($rowPatients["riwayat_alergi"])) : ?>
                                    <?= $rowPatients["riwayat_alergi"]; ?>
                                  <?php endif; ?>
                                </td>
                              </tr>
                              <?php $noTable++; ?>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </tbody>
                      </table>

                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- TABLE DATA MEDICAL RECORDS -->


          <!-- TABLE DATA MEDICAL RECORDS  (EMPTY MEDICAL RECORDS)-->
          <div class="tab-pane fade" id="list-empty" role="tabpanel" aria-labelledby="list-empty-list">
            <div class="col-lg-12">
              <div class="row">

                <div class="col-12" id="code_access">

                  <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                      <h5 class="card-title">
                        <strong>Data <?= $pageTitle; ?></strong>
                      </h5>

                      <!-- Notification Add Success -->
                      <?php if ($_GET["pages"] === "medical-records-add-success") : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Sukses!</strong> 1 Data Berhasil Ditambahkan
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      <?php endif; ?>

                      <!-- Notification Edit Success -->
                      <?php if ($_GET["pages"] === "medical-records-edit-success") : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Sukses!</strong> 1 Data Berhasil Diubah
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      <?php endif; ?>

                      <!-- Notification Deleted Success -->
                      <?php if ($_GET["pages"] === "medical-records-deleted-success") : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Sukses!</strong> 1 Data Berhasil Dihapus
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      <?php endif; ?>

                      <table class="table table-borderless datatable">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Opsi</th>
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
                            <?php
                            $noRekamMedis = $rowPatients["no_rekam_medis"];
                            $resultMedicalRecords = mysqli_query($conn, "SELECT no_rekam_medis FROM tb_medical_records WHERE no_rekam_medis = '$noRekamMedis' ");
                            ?>
                            <?php if (!mysqli_fetch_assoc($resultMedicalRecords)) : ?>
                              <tr>
                                <th scope="row"><a href="#"><?= $noTable; ?></a></th>
                                <td>
                                  <a href="#" class="badge p-2 btn bg-primary text-white mb-1" title="Lihat Rekam Medis" data-bs-toggle="modal" data-bs-target="#modalViewMedicalRecords<?= $rowPatients["id"]; ?>">
                                    <i class="bi bi-eye fs-6"></i>
                                  </a>

                                  <?php if ($rowSession["level"] === $levelSuperAdmin or $rowSession["level"] === $levelDoctor) : ?>
                                    <a href="#" class="badge p-2 btn bg-purple-1 text-white mb-1" title="Buat Kunjungan" data-bs-toggle="modal" data-bs-target="#modalAddMedicalRecords<?= $rowPatients["id"]; ?>">
                                      <i class="bi bi-pencil-square fs-6"></i>
                                    </a>
                                  <?php endif; ?>

                                  <a type="button" class="btn btn-info badge p-2 fs-5 mt-1 text-white dropdown-toggle" data-bs-toggle="dropdown">
                                  </a>
                                  <ul class="dropdown-menu">
                                    <li>
                                      <form action="<?= $url; ?>admin/print/medical-record" method="post">
                                        <input type="text" hidden name="no_rekam_medis" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($rowPatients["no_rekam_medis"]))))))))); ?>">
                                        <button type="submit" name="print" class="dropdown-item status-patient-true" href="#">Rekam Medis (PDF)</button>
                                      </form>
                                    </li>
                                    <li>
                                      <form action="<?= $url; ?>admin/print/card-control" method="post">
                                        <input type="text" hidden name="no_rekam_medis" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($rowPatients["no_rekam_medis"]))))))))); ?>">
                                        <button type="submit" name="submit_patient_status" class="dropdown-item status-patient-bingo" href="#">Kartu Kontrol Pasien (PDF)</button>
                                      </form>
                                    </li>
                                  </ul>
                                </td>
                                <td><?= $rowPatients["no_rekam_medis"]; ?></td>
                                <td>
                                  <?php if (empty($rowPatients["no_kartu_jaminan"])) : ?>
                                    -
                                  <?php endif; ?>
                                  <?php if (!empty($rowPatients["no_kartu_jaminan"])) : ?>
                                    <?= $rowPatients["no_kartu_jaminan"]; ?>
                                  <?php endif; ?>
                                </td>
                                <td><?= $rowPatients["nama_pasien"]; ?></td>
                                <td><?= $rowPatients["jenis_kelamin"]; ?></td>
                                <td>
                                  <?php if (empty($rowPatients["nama_kk"])) : ?>
                                    -
                                  <?php endif; ?>
                                  <?php if (!empty($rowPatients["nama_kk"])) : ?>
                                    <?= $rowPatients["nama_kk"]; ?>
                                  <?php endif; ?>
                                </td>
                                <td><?= $rowPatients["tempat_lahir"]; ?>/<?= date_id($rowPatients["tgl_lahir"]); ?></td>
                                <td><?= $rowPatients["pendidikan"]; ?></td>
                                <td>
                                  <?php if (empty($rowPatients["pekerjaan"])) : ?>
                                    -
                                  <?php endif; ?>
                                  <?php if (!empty($rowPatients["pekerjaan"])) : ?>
                                    <?= $rowPatients["pekerjaan"]; ?>
                                  <?php endif; ?>
                                </td>
                                <td>
                                  <?php if (empty($rowPatients["no_hp"])) : ?>
                                    -
                                  <?php endif; ?>
                                  <?php if (!empty($rowPatients["no_hp"])) : ?>
                                    <?= $rowPatients["no_hp"]; ?>
                                  <?php endif; ?>
                                </td>
                                <td><?= $rowPatients["agama"]; ?></td>
                                <td><?= $rowPatients["alamat"]; ?></td>
                                <td>
                                  <?php if (empty($rowPatients["riwayat_alergi"])) : ?>
                                    -
                                  <?php endif; ?>
                                  <?php if (!empty($rowPatients["riwayat_alergi"])) : ?>
                                    <?= $rowPatients["riwayat_alergi"]; ?>
                                  <?php endif; ?>
                                </td>
                              </tr>
                              <?php $noTable++; ?>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </tbody>
                      </table>

                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- TABLE DATA MEDICAL RECORDS (EMPTY MEDICAL RECORDS)-->

        </div>


        <!-- === MODAL VIEW MEDICAL RECORDS=== -->
        <?php foreach ($patients as $rowPatients) : ?>
          <div class="modal modal-xl fade" id="modalViewMedicalRecords<?= $rowPatients["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h3>Rekam Medis Pasien</h3>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="d-grid gap-2 col-12 mx-auto">
                    <div class="card-medical-records">
                      <div class="header-medical-records">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-2">
                              <img src="<?= $url; ?>assets/img/logo/Logo_Kabupaten_Bone_Bolango.jpg" alt="" style="float:right;" width="60px">
                            </div>
                            <div class="col-md-8">
                              <h6>Dinas Kesehatan Kabupaten Bone Bolango</h6>
                              <h3>PUSKESMAS SUWAWA</h3>
                              <p>Jl. Nani Wartabone No. 122 Desa Boludawa Kode Pos 96562</p>
                            </div>
                            <div class="col-md-2">
                              <img src="<?= $logo; ?>" alt="" width="70px">
                            </div>
                            <div class="hr-1"></div>
                            <div class="hr-2"></div>
                          </div>

                          <div class="row patient-data">
                            <div class="col-md-6">
                              <table>
                                <tr>
                                  <td>No. Rekam Medis</td>
                                  <td>: <?= $rowPatients["no_rekam_medis"]; ?></td>
                                </tr>
                                <tr>
                                  <td>No. Kartu Jaminan</td>
                                  <td>:
                                    <?php if (empty($rowPatients["no_kartu_jaminan"])) : ?>
                                      -
                                    <?php endif; ?>
                                    <?php if (!empty($rowPatients["no_kartu_jaminan"])) : ?>
                                      <?= $rowPatients["no_kartu_jaminan"]; ?>
                                    <?php endif; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Nama Pasien</td>
                                  <td>: <?= $rowPatients["nama_pasien"]; ?></td>
                                </tr>
                                <tr>
                                  <td>Jenis Kelamin</td>
                                  <td>: <?= $rowPatients["jenis_kelamin"]; ?></td>
                                </tr>
                                <tr>
                                  <td>Nama KK</td>
                                  <td>:
                                    <?php if (empty($rowPatients["nama_kk"])) : ?>
                                      -
                                    <?php endif; ?>
                                    <?php if (!empty($rowPatients["nama_kk"])) : ?>
                                      <?= $rowPatients["nama_kk"]; ?>
                                    <?php endif; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Tempat Tgl Lahir/Umur</td>
                                  <td>: <?= $rowPatients["tempat_lahir"]; ?>, <?= date_id($rowPatients["tgl_lahir"]); ?> / <?= date("Y") - substr($rowPatients["tgl_lahir"], 0, 4); ?></td>
                                </tr>
                              </table>
                            </div>
                            <div class="col-md-6">
                              <table>
                                <tr>
                                  <td>Pendidikan</td>
                                  <td>:
                                    <?php if (empty($rowPatients["pendidikan"])) : ?>
                                      -
                                    <?php endif; ?>
                                    <?php if (!empty($rowPatients["pendidikan"])) : ?>
                                      <?= $rowPatients["pendidikan"]; ?>
                                    <?php endif; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Pekerjaan</td>
                                  <td>:
                                    <?php if (empty($rowPatients["pekerjaan"])) : ?>
                                      -
                                    <?php endif; ?>
                                    <?php if (!empty($rowPatients["pekerjaan"])) : ?>
                                      <?= $rowPatients["pekerjaan"]; ?>
                                    <?php endif; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td>No. Hp</td>
                                  <td>:
                                    <?php if (empty($rowPatients["no_hp"])) : ?>
                                      -
                                    <?php endif; ?>
                                    <?php if (!empty($rowPatients["no_hp"])) : ?>
                                      <?= $rowPatients["no_hp"]; ?>
                                    <?php endif; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Agama</td>
                                  <td>: <?= $rowPatients["agama"]; ?></td>
                                </tr>
                                <tr>
                                  <td>Alamat</td>
                                  <td>: <?= $rowPatients["alamat"]; ?></td>
                                </tr>
                                <tr>
                                  <td>Riwayat Alergi</td>
                                  <td>:
                                    <?php if (empty($rowPatients["riwayat_alergi"])) : ?>
                                      -
                                    <?php endif; ?>
                                    <?php if (!empty($rowPatients["riwayat_alergi"])) : ?>
                                      <?= $rowPatients["riwayat_alergi"]; ?>
                                    <?php endif; ?>
                                  </td>
                                </tr>
                              </table>
                            </div>
                          </div>

                          <div class="row mt-2 medical-data">
                            <table border="1" cellspacing="0" class="table table-bordered border-dark">
                              <thead>
                                <tr>
                                  <th>NO</th>
                                  <th>HARI / TANGGAL</th>
                                  <th>MEDIS</th>
                                  <th>PARAMEDIS</th>
                                  <th>KETERANGAN</th>
                                  <?php if ($rowSession["level"] === $levelSuperAdmin or $rowSession["level"] === $levelDoctor) : ?>
                                    <th>OPSI</th>
                                  <?php endif; ?>
                                </tr>
                              </thead>
                              <tbody>
                                <?php $idTable = 1; ?>
                                <?php foreach ($medicalRecords as $rowMedicalRecords) : ?>
                                  <?php if ($rowPatients["no_rekam_medis"] === $rowMedicalRecords["no_rekam_medis"]) : ?>
                                    <tr>
                                      <td><?= $idTable; ?></td>
                                      <td>
                                        <?php if (date("l", strtotime($rowMedicalRecords["tgl"])) === "Sunday") : ?>
                                          Minggu,
                                        <?php endif; ?>

                                        <?php if (date("l", strtotime($rowMedicalRecords["tgl"])) === "Monday") : ?>
                                          Senin,
                                        <?php endif; ?>

                                        <?php if (date("l", strtotime($rowMedicalRecords["tgl"])) === "Tuesday") : ?>
                                          Selasa,
                                        <?php endif; ?>

                                        <?php if (date("l", strtotime($rowMedicalRecords["tgl"])) === "Wednesday") : ?>
                                          Rabu,
                                        <?php endif; ?>

                                        <?php if (date("l", strtotime($rowMedicalRecords["tgl"])) === "Thursday") : ?>
                                          Kamis,
                                        <?php endif; ?>

                                        <?php if (date("l", strtotime($rowMedicalRecords["tgl"])) === "Friday") : ?>
                                          Jumat,
                                        <?php endif; ?>

                                        <?php if (date("l", strtotime($rowMedicalRecords["tgl"])) === "Saturday") : ?>
                                          Sabtu,
                                        <?php endif; ?>

                                        <?= date_id($rowMedicalRecords["tgl"]); ?>
                                      </td>
                                      <td><?= $rowMedicalRecords["medis"]; ?></td>
                                      <td><?= $rowMedicalRecords["paramedis"]; ?></td>
                                      <td><?= $rowMedicalRecords["keterangan"]; ?></td>
                                      <?php if ($rowSession["level"] === $levelSuperAdmin or $rowSession["level"] === $levelDoctor) : ?>
                                        <td>
                                          <a href="" class="badge text-bg-danger" data-bs-toggle="modal" data-bs-target="#modalDeleteMedicalRecords<?= $rowMedicalRecords["id"]; ?>">Hapus</a>
                                        </td>
                                      <?php endif; ?>
                                    </tr>
                                    <?php $idTable++; ?>
                                  <?php endif; ?>
                                <?php endforeach; ?>
                              </tbody>
                            </table>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <!-- === end MODAL VIEW MEDICAL RECORDS=== -->

        <?php if ($rowSession["level"] === $levelSuperAdmin or $rowSession["level"] === $levelDoctor) : ?>
          <!-- === MODAL ADD MEDICAL RECORDS === -->
          <?php $idCkEditor = 1; ?>
          <?php foreach ($patients as $rowPatients) : ?>
            <div class="modal modal-xl fade" id="modalAddMedicalRecords<?= $rowPatients["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title fs-6" id="exampleModalLabel">Tambah Data <?= $pageTitle; ?> - <?= $rowPatients["nama_pasien"]; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="d-grid gap-2 col-12 mx-auto">
                      <form action="" class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>
                        <div class="col-md-12 mb-2" hidden>
                          <input type="text" hidden name="no_rekam_medis" value="<?= base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($rowPatients["no_rekam_medis"]))))))))); ?>">
                          <input type="text" hidden name="date_send" value="<?= $dateEncode; ?>">
                        </div>

                        <div class="col-md-12 mb-2">
                          <label for="tgl" class="form-label">Bln/Tgl/Thn</label>
                          <input type="date" class="form-control" name="tgl" id="tgl" required placeholder="Nomor Kartu Jaminan">
                          <div class="invalid-feedback">
                            Harap Masukan Bln/Tgl/Thn
                          </div>
                        </div>

                        <div class="col-md-6 mb-2">
                          <label for="medis<?= $idCkEditor; ?>" class="form-label">Medis</label>
                          <textarea class="form-control" name="medis" id="medis<?= $idCkEditor; ?>" placeholder="Masukan Medis"></textarea>
                          <div class="invalid-feedback">
                            Harap Masukan Medis
                          </div>
                        </div>

                        <div class="col-md-6 mb-2">
                          <label for="paramedis<?= $idCkEditor; ?>" class="form-label">Paramedis</label>
                          <textarea class="form-control" name="paramedis" id="paramedis<?= $idCkEditor; ?>" placeholder="Masukan Paramedis"></textarea>
                          <div class="invalid-feedback">
                            Harap Masukan Paramedis
                          </div>
                        </div>

                        <div class="col-md-12 mb-2">
                          <label for="keterangan<?= $idCkEditor; ?>" class="form-label">Keterangan</label>
                          <textarea class="form-control" name="keterangan" id="keterangan<?= $idCkEditor; ?>" placeholder="Masukan Keterangan" minlength="1"></textarea>
                          <div class="invalid-feedback">
                            Harap Masukan Keterangan
                          </div>
                        </div>

                        <div class="col-12">
                          <button class="btn bg-purple-1 text-white" type="submit" name="add_medical_record"><i class="bi bi-save"></i> Simpan</button>
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
            <?php $idCkEditor++; ?>
          <?php endforeach; ?>
          <!-- === end MODAL ADD MEDICAL RECORDS === -->

          <!-- MODAL DELETE MEDICAL RECORDS -->
          <?php foreach ($medicalRecords as $rowMedicalRecords) : ?>
            <div class="modal fade" id="modalDeleteMedicalRecords<?= $rowMedicalRecords["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      <input type="text" name="id" hidden value="<?= $rowMedicalRecords["id"]; ?>">
                      <button type="submit" name="del_medical_records" class="btn btn-danger">Hapus</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <!-- end MODAL DELETE MEDICAL RECORDS -->
        <?php endif; ?>

      </div>

      </div>
    </section>
    <!-- ====================================
       end TEMPLATE MEDICAL RECORDS 
       ===================================-->
  <?php endif; ?>

</main>



<?php if ($rowSession["level"] === $levelSuperAdmin or $rowSession["level"] === $levelDoctor) : ?>
  <!-- === CONDITION DATA MEDICAL RECORDS=== -->
  <?php if (isset($_POST["add_medical_record"])) : ?>
    <?php if (addMedicalRecord($_POST) > 0) : ?>
      <script>
        document.location.href = '<?= $url; ?>admin/dashboard/medical-records-add-success';
      </script>
    <?php endif; ?>
  <?php endif; ?>

  <?php if (isset($_POST["del_medical_records"])) : ?>
    <?php if (deleteMedicalRecord($_POST["id"])) : ?>
      <script>
        document.location.href = '<?= $url; ?>admin/dashboard/medical-records-deleted-success';
      </script>
    <?php endif; ?>
  <?php endif; ?>
<?php endif; ?>