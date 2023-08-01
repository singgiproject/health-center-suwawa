<?php
error_reporting(1);
// =======================================
// CHECK ACTIVE MENU SIDEBAR
// =======================================

// MENU ACTIVE HOME
if ($_GET["pages"] === "home" or $_GET["pages"] === "welcome") {
  $homeActive1 = "active-sidebar";
}

// MENU ACTIVE PATIENT
if (
  $_GET["pages"] === "patients" or
  $_GET["pages"] === "patients-add-success" or
  $_GET["pages"] === "patients-edit-success" or
  $_GET["pages"] === "patients-deleted-success" or
  $_GET["pages"] === "medical-records" or
  $_GET["pages"] === "medical-records-add-success" or
  $_GET["pages"] === "medical-records-edit-success" or
  $_GET["pages"] === "medical-records-deleted-success"
) {
  $patientActive = "active-sidebar";
}

if (
  $_GET["pages"] === "patients" or
  $_GET["pages"] === "patients-add-success" or
  $_GET["pages"] === "patients-edit-success" or
  $_GET["pages"] === "patients-deleted-success"
) {
  $patientsDataActive = "active-sidebar-list";
}

if (
  $_GET["pages"] === "medical-records" or
  $_GET["pages"] === "medical-records-add-success" or
  $_GET["pages"] === "medical-records-edit-success" or
  $_GET["pages"] === "medical-records-deleted-success"
) {
  $medicalRecordsActive = "active-sidebar-list";
}

if (
  $_GET["pages"] === "satisfaction-survey"
) {
  $patientActive = "active-sidebar";
}

if (
  $_GET["pages"] === "satisfaction-survey"
) {
  $satisfactionSurveyActive = "active-sidebar-list";
}

// MENU ACTIVE PAGE APP
if (
  $_GET["pages"] === "banner-carousel" or
  $_GET["pages"] === "services" or
  $_GET["pages"] === "gallery" or
  $_GET["pages"] === "team"
) {
  $pageAppActive = "active-sidebar";
}
if (
  $_GET["pages"] === "banner-carousel"
) {
  $bannerCarouselActive = "active-sidebar-list";
}
if (
  $_GET["pages"] === "services"
) {
  $servicesActive = "active-sidebar-list";
}
if (
  $_GET["pages"] === "gallery"
) {
  $galleryActive = "active-sidebar-list";
}
if (
  $_GET["pages"] === "team"
) {
  $teamActive = "active-sidebar-list";
}

// MENU ACTIVE SETTING APP
if (
  $_GET["pages"] === "contact" or
  $_GET["pages"] === "about"
) {
  $settingsAppActive = "active-sidebar";
}

if (
  $_GET["pages"] === "contact"
) {
  $contactActive = "active-sidebar-list";
}

if (
  $_GET["pages"] === "about"
) {
  $aboutActive = "active-sidebar-list";
}

// MENU ACTIVE ACCOUNT
if (
  $_GET["pages"] === "profile"
) {
  $AccountActive = "active-sidebar";
}

?>
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-heading">Umum</li>

    <li class="nav-item <?= $homeActive1; ?>">
      <a class="nav-link" href="home">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link <?= $patientActive; ?> collapsed" data-bs-target="#page-patient-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-people"></i><span>Pasien</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="page-patient-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <?php if ($rowSession["level"] === "superadmin" or $rowSession["level"] === "staff") : ?>
          <li class="<?= $patientsDataActive; ?>">
            <a href="patients">
              <i class="bi bi-circle"></i><span>Data Pasien</span>
            </a>
          </li>
        <?php endif; ?>

        <?php if ($rowSession["level"] === "superadmin" or $rowSession["level"] === "doctor" or $rowSession["level"] === "staff") : ?>
          <li class="<?= $medicalRecordsActive; ?>">
            <a href="medical-records">
              <i class="bi bi-circle"></i><span>Rekam Medis</span>
            </a>
          </li>
        <?php endif; ?>

        <?php if ($rowSession["level"] === "superadmin") : ?>
          <li class="<?= $satisfactionSurveyActive; ?>">
            <a href="satisfaction-survey">
              <i class="bi bi-circle"></i><span>Survei Kepuasan</span>
            </a>
          </li>
        <?php endif; ?>
      </ul>

    </li>

    <?php if ($rowSession["level"] === "superadmin" or $rowSession["level"] === "staff") : ?>
      <li class="nav-heading">Sistem</li>

      <li class="nav-item">
        <a class="nav-link <?= $pageAppActive; ?> collapsed" data-bs-target="#page-website-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-globe"></i><span>Halaman Aplikasi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="page-website-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li class="<?= $bannerCarouselActive; ?>">
            <a href="banner-carousel">
              <i class="bi bi-circle"></i><span>Banner Carousel</span>
            </a>
          </li>
          <li class="<?= $servicesActive; ?>">
            <a href="services">
              <i class="bi bi-circle"></i><span>Layanan</span>
            </a>
          </li>
          <li class="<?= $galleryActive; ?>">
            <a href="gallery">
              <i class="bi bi-circle"></i><span>Galeri</span>
            </a>
          </li>
          <li class="<?= $teamActive; ?>">
            <a href="team">
              <i class="bi bi-circle"></i><span>Tim</span>
            </a>
          </li>
        </ul>

      </li>

      <li class="nav-item">
        <a class="nav-link <?= $settingsAppActive; ?> collapsed" data-bs-target="#page-setting-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gear"></i><span>Pengaturan Aplikasi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="page-setting-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li class="<?= $contactActive; ?>">
            <a href="contact">
              <i class="bi bi-circle"></i><span>Info Kontak Aplikasi</span>
            </a>
          </li>
          <li class="<?= $aboutActive; ?>">
            <a href="about">
              <i class="bi bi-circle"></i><span>Info Tentang Aplikasi</span>
            </a>
          </li>
        </ul>

      </li>
      <!-- End Components Nav -->
    <?php endif; ?>


    <li class="nav-heading">Akun</li>

    <li class="nav-item <?= $AccountActive; ?>">
      <a class="nav-link" href="profile">
        <i class="bi bi-gear-fill"></i>
        <span>Pengaturan Akun</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalLogout">
        <i class="bi bi-box-arrow-right"></i>
        <span>Keluar</span>
      </a>
    </li>

  </ul>

</aside>


<!-- Modals Sidebar -->
<div class="modal fade" id="modalAppointments" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih Jenis Pasien</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row m-2">
          <a href="appointments-bpjs" class="col-md-6 btn bg-purple-1 text-light">Pasien BPJS</a>
          <a href="appointments-umum" class=" col-md-6 btn bg-purple-1 text-light">Pasien Umum</a>
        </div>
        <div class="row m-2">
          <a href="appointments-inhealth" class=" col-md-6 btn bg-purple-1 text-light">Pasien InHealth</a>
          <a href="appointments-pln" class=" col-md-6 btn bg-purple-1 text-light">Pasien Karyawan PLN</a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>