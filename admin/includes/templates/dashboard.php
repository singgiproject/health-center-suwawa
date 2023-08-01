<?php if ($_GET["pages"] === "welcome") : ?>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50  align-items-center justify-content-center load-welcome">
    <img src="<?= $logo; ?>" alt="" class="loading-animation loading-logo">
    <img src="<?= $url; ?>assets/img/logo/loading3.gif?v=<?= time(); ?>" alt="" class="loading-animation">
    <p>Dashboard - <?= $title; ?></p>
  </div>
  <!-- Spinner End -->
<?php endif; ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard - <?= $title; ?></h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Selamat Datang </li>
        <li class="breadcrumb active">&nbsp;<?= $rowSession["first_name"]; ?> <?= $rowSession["last_name"]; ?></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <?php if ($rowSession["level"] === $levelSuperAdmin or $rowSession["level"] === $levelStaff) : ?>
            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <a href="services">
                  <div class="card-body">
                    <h5 class="card-title">Layanan</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-tools"></i>
                      </div>
                      <div class="ps-3">
                        <h6><?php echo $resultService["countService"]; ?></h6>
                        <span class="text-muted small pt-2 ps-1">Jumlah Layanan</span>
                      </div>
                    </div>
                  </div>
                </a>

              </div>
            </div>
          <?php endif; ?>
          <!-- End Sales Card -->

          <!-- Gallery Card -->
          <?php if ($rowSession["level"] === $levelSuperAdmin) : ?>
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card gallery-card">

                <a href="gallery">
                  <div class="card-body">
                    <h5 class="card-title">Galeri</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-images"></i>
                      </div>
                      <div class="ps-3">
                        <h6><?php echo $resultGallery["countGallery"]; ?></h6>
                        <span class="text-muted small pt-2 ps-1">Jumlah Galeri</span>
                      </div>
                    </div>
                  </div>
                </a>

              </div>
            </div>
          <?php endif; ?>
          <!-- End Gallery Card -->

          <!-- Account Card -->
          <?php if ($rowSession["level"] === $levelSuperAdmin) : ?>
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card account-card">

                <a href="">
                  <div class="card-body">
                    <h5 class="card-title">Akun</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-fill"></i>
                      </div>
                      <div class="ps-3">
                        <h6><?php echo $resultAccount["countAccount"]; ?></h6>
                        <span class="text-muted small pt-2 ps-1">Jumlah Akun Sistem</span>
                      </div>
                    </div>
                  </div>
                </a>

              </div>
            </div>
          <?php endif; ?>
          <!-- End Account Card -->

          <!-- Patient Card -->
          <?php if ($rowSession["level"] === $levelStaff) : ?>
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card account-card">

                <a href="">
                  <div class="card-body">
                    <h5 class="card-title">Data Pasien</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-fill"></i>
                      </div>
                      <div class="ps-3">
                        <h6><?php echo $resultPatient["countPatient"]; ?></h6>
                        <span class="text-muted small pt-2 ps-1">Jumlah Data Pasien</span>
                      </div>
                    </div>
                  </div>
                </a>

              </div>
            </div>
          <?php endif; ?>
          <!-- End Patient Card -->

          <!-- Medical Record Card -->
          <?php if ($rowSession["level"] === $levelStaff or $rowSession["level"] === $levelDoctor) : ?>
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card account-card">

                <a href="">
                  <div class="card-body">
                    <h5 class="card-title">Rekam Medis</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-clipboard2-pulse"></i>
                      </div>
                      <div class="ps-3">
                        <h6><?= $resultMedicalRecord["countMedicalRecord"]; ?></h6>
                        <span class="text-muted small pt-2 ps-1">Jumlah Rekam Medis</span>
                      </div>
                    </div>
                  </div>
                </a>

              </div>
            </div>
          <?php endif; ?>
          <!-- End Medical Record Card -->

          <!-- Right side columns -->
          <?php if ($rowSession["level"] === $levelDoctor) : ?>
            <div class="col-lg-4">

              <!-- Testimoni Traffic -->
              <div class="card">
                <div class="card-body pb-0">
                  <h5 class="card-title">Survei Kepuasan (<?php echo $resultAllSatisfied["countAllSatisfied"]; ?>)</span></h5>

                  <div class="news">
                    <?php foreach ($satisfactionSurvey as $row) : ?>
                      <div class="post-item clearfix testimonial-dashboard">
                        <img class="rounded-circle bi bi-person-circle" alt="Foto Profil <?= $row["name"]; ?>">
                        <h4><a href="satisfaction-survey"><?= $row["name"]; ?></a> | <small><?= $row["no_hp"]; ?></small></h4>
                        <p>
                          <?= $row["description"]; ?> <br>
                          <small>
                            <strong><i class="bi bi-clock"></i> <?= time_ago($row["date"]); ?></strong>
                          </small>
                        </p>
                      </div>
                    <?php endforeach; ?>
                  </div><!-- End sidebar recent posts-->

                </div>
              </div>
            </div>
          <?php endif; ?>
          <!-- End Testimoni -->

          <?php if ($rowSession["level"] === $levelDoctor) : ?>
            <div class="col-lg-4">
              <!-- Website Traffic -->
              <div class="card">
                <div class="card-body pb-0">
                  <h5 class="card-title">Traffic Survei Kepuasan</h5>

                  <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      echarts.init(document.querySelector("#trafficChart")).setOption({
                        tooltip: {
                          trigger: 'item'
                        },
                        legend: {
                          top: '5%',
                          left: 'center'
                        },
                        series: [{
                          name: 'Access From',
                          type: 'pie',
                          radius: ['40%', '70%'],
                          avoidLabelOverlap: false,
                          label: {
                            show: false,
                            position: 'center'
                          },
                          emphasis: {
                            label: {
                              show: true,
                              fontSize: '18',
                              fontWeight: 'bold'
                            }
                          },
                          labelLine: {
                            show: false
                          },
                          data: [{
                              value: <?php echo $resultLessSatisfied["countLessSatisfied"]; ?>,
                              name: 'Kurang Puas'
                            },
                            {
                              value: <?php echo $resultSatisfied["countSatisfied"]; ?>,
                              name: 'Puas'
                            },
                            {
                              value: <?php echo $resultNotSatisfied["countNotSatisfied"]; ?>,
                              name: 'Tidak Puas'
                            }
                          ]
                        }]
                      });
                    });
                  </script>

                </div>
              </div>
            </div>
          <?php endif; ?>
          <!-- End Website Traffic -->

          <!-- Customers Card -->
          <?php if ($rowSession["level"] === $levelSuperAdmin) : ?>
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Pengunjung Website <i class="bi bi-eye"></i></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $resultVisitor["countVisitor"]; ?></h6>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          <?php endif; ?>
          <!-- End Customers Card -->


          <!-- Top Selling -->
          <?php if ($rowSession["level"] === $levelSuperAdmin) : ?>
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Data Pengunjung Website
                    <i class="bi bi-eye"></i>
                    <?php echo $resultVisitor["countVisitor"]; ?>
                  </h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Alamat IP</th>
                        <th scope="col">Waktu Akses</th>
                        <th scope="col">Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $noTableVisitor = 1; ?>
                      <?php foreach ($visitor as $row) : ?>
                        <tr>
                          <td><?= $noTableVisitor; ?></td>
                          <td><?= $row["ip_visitor"]; ?></td>
                          <td><?= time_ago($row["date"]); ?></td>
                          <td>
                            <a href="https://whatismyipaddress.com/ip/<?= $row["ip_visitor"]; ?>" class="badge btn bg-purple-1" target="_BLANK"><i class="bi bi-geo-alt"></i> Lokasi</a>
                          </td>
                        </tr>
                        <?php $noTableVisitor++; ?>
                      <?php endforeach; ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div>
          <?php endif; ?>
          <!-- End Top Selling -->

        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <?php if ($rowSession["level"] === $levelStaff) : ?>
        <div class="col-lg-6">

          <!-- Testimoni Traffic -->
          <div class="card">
            <div class="card-body pb-0">
              <h5 class="card-title">Survei Kepuasan (<?php echo $resultAllSatisfied["countAllSatisfied"]; ?>)</span></h5>

              <div class="news">
                <?php foreach ($satisfactionSurvey as $row) : ?>
                  <div class="post-item clearfix testimonial-dashboard">
                    <img class="rounded-circle bi bi-person-circle" alt="Foto Profil <?= $row["name"]; ?>">
                    <h4><a href="satisfaction-survey"><?= $row["name"]; ?></a> | <small><?= $row["no_hp"]; ?></small></h4>
                    <p>
                      <?= $row["description"]; ?> <br>
                      <small>
                        <strong><i class="bi bi-clock"></i> <?= time_ago($row["date"]); ?></strong>
                      </small>
                    </p>
                  </div>
                <?php endforeach; ?>
              </div><!-- End sidebar recent posts-->

            </div>
          </div>
        </div>
      <?php endif; ?>
      <!-- End Testimoni -->

      <?php if ($rowSession["level"] === $levelStaff) : ?>
        <div class="col-lg-6">
          <!-- Website Traffic -->
          <div class="card">
            <div class="card-body pb-0">
              <h5 class="card-title">Traffic Survei Kepuasan</h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: <?php echo $resultLessSatisfied["countLessSatisfied"]; ?>,
                          name: 'Kurang Puas'
                        },
                        {
                          value: <?php echo $resultSatisfied["countSatisfied"]; ?>,
                          name: 'Puas'
                        },
                        {
                          value: <?php echo $resultNotSatisfied["countNotSatisfied"]; ?>,
                          name: 'Tidak Puas'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div>
        </div>
      <?php endif; ?>
      <!-- End Website Traffic -->


    </div><!-- End Right side columns -->

    </div>
  </section>

</main><!-- End #main -->