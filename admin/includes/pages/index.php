<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location:../../auth/login");
  exit;
}
// CONNECT FUNCTIONS
require('../../../funct/functions.php');

// SESSION USER LOGIN
if (isset($_SESSION["login"])) {

  $userSession = $_SESSION["username"];
  $resultSession = $conn->query("SELECT * FROM tb_users WHERE username = '$userSession' ");
  $rowSession = mysqli_fetch_assoc($resultSession);
  $idSession = $rowSession["id"];
}

// URL DASHBOARD CODE ACCESS
// $urlDashboardCodeAccess = "dashboard#code_access";

// CHECK EMPTY ACCOUNT
if (empty($rowSession["id"])) {
  header("Location:../../auth/logout");
  exit;
}

// === INCLUDES ===
include("../../../includes/account/level.php");
include("../../../includes/table/query.php");
include("../../../includes/visitor/counter.php");
include("../../../includes/count/counts.php");
include("../../../includes/logic/time-ago.php");
include("../../../includes/logic/shuffle.php");
include("../../../includes/head/data-head.php");
include("../../../includes/date/date-id.php");
include("../../../includes/date/date.php");

// Page Title
if ($_GET["pages"] === "home" or $_GET["pages"] === "welcome") {
  $pageTitle = "Dashboard";
}
if (
  $_GET["pages"] === "patients" or
  $_GET["pages"] === "patients-add-success" or
  $_GET["pages"] === "patients-edit-success" or
  $_GET["pages"] === "patients-deleted-success"
) {
  $pageTitle = "Pasien";
}
if (
  $_GET["pages"] === "medical-records" or
  $_GET["pages"] === "medical-records-add-success" or
  $_GET["pages"] === "medical-records-edit-success" or
  $_GET["pages"] === "medical-records-deleted-success" or
  $_GET["pages"] === "medical-records-print"
) {
  $pageTitle = "Rekam Medis";
}
if ($_GET["pages"] === "satisfaction-survey") {
  $pageTitle = "Survei Kepuasan";
}
if ($_GET["pages"] === "banner-carousel") {
  $pageTitle = "Banner Carousel";
}
if ($_GET["pages"] === "services") {
  $pageTitle = "Layanan";
}
if ($_GET["pages"] === "gallery") {
  $pageTitle = "Galeri";
}
if ($_GET["pages"] === "team") {
  $pageTitle = "Tim";
}
if ($_GET["pages"] === "about") {
  $pageTitle = "Tentang";
}
if ($_GET["pages"] === "contact") {
  $pageTitle = "Kontak";
}
if ($_GET["pages"] === "messages") {
  $pageTitle = "Pesan";
}
if ($_GET["pages"] === "profile") {
  $pageTitle = "Profil";
}
// Checked Url Manipulation
if (
  $_GET["pages"] !== "home" and
  $_GET["pages"] !== "welcome" and
  $_GET["pages"] !== "patients" and
  $_GET["pages"] !== "patients-add-success" and
  $_GET["pages"] !== "patients-edit-success" and
  $_GET["pages"] !== "patients-deleted-success" and
  $_GET["pages"] !== "medical-records" and
  $_GET["pages"] !== "medical-records-add-success" and
  $_GET["pages"] !== "medical-records-edit-success" and
  $_GET["pages"] !== "medical-records-deleted-success" and
  $_GET["pages"] !== "medical-records-print" and
  $_GET["pages"] !== "satisfaction-survey" and
  $_GET["pages"] !== "banner-carousel" and
  $_GET["pages"] !== "services" and
  $_GET["pages"] !== "gallery" and
  $_GET["pages"] !== "team" and
  $_GET["pages"] !== "about" and
  $_GET["pages"] !== "contact" and
  $_GET["pages"] !== "messages" and
  $_GET["pages"] !== "profile"
) {
  header("Location:home");
  exit;
}


?>
<!DOCTYPE html>
<html lang="en">

<?php include("../../includes/templates/head.php"); ?>

<body>

  <!-- ======= Header ======= -->
  <?php include("../templates/header.php"); ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include("../templates/sidebar.php"); ?>
  <!-- End Sidebar-->

  <?php if ($_GET["pages"] === "home" or $_GET["pages"] === "welcome") : ?>
    <!-- ======= Dashboard ======= -->
    <?php include("../templates/dashboard.php"); ?>
    <!-- End Dashboard -->
  <?php endif; ?>

  <?php if (
    $_GET["pages"] === "patients" or
    $_GET["pages"] === "patients-add-success" or
    $_GET["pages"] === "patients-edit-success" or
    $_GET["pages"] === "patients-deleted-success"
  ) : ?>
    <!-- ======= Patients ======= -->
    <?php include("../templates/patients.php"); ?>
    <!-- End Patients -->
  <?php endif; ?>

  <?php if (
    $_GET["pages"] === "medical-records" or
    $_GET["pages"] === "medical-records-add-success" or
    $_GET["pages"] === "medical-records-edit-success" or
    $_GET["pages"] === "medical-records-deleted-success"
  ) : ?>
    <!-- ======= Medical Records ======= -->
    <?php include("../templates/medical-records.php"); ?>
    <!-- End Medical Records -->
  <?php endif; ?>

  <?php if ($_GET["pages"] === "medical-records-print") : ?>
    <!-- ======= Medical Record Print ======= -->
    <?php include("../templates/medical-records-print.php"); ?>
    <!-- End Medical Record Print -->
  <?php endif; ?>

  <?php if ($_GET["pages"] === "satisfaction-survey") : ?>
    <!-- ======= Satisfaction Survey ======= -->
    <?php include("../templates/satisfaction-survey.php"); ?>
    <!-- End Satisfaction Survey -->
  <?php endif; ?>

  <?php if ($_GET["pages"] === "banner-carousel") : ?>
    <!-- ======= Banner Carousel ======= -->
    <?php include("../templates/banner-carousel.php"); ?>
    <!-- End Banner Carousel -->
  <?php endif; ?>

  <?php if ($_GET["pages"] === "services") : ?>
    <!-- ======= Services ======= -->
    <?php include("../templates/services.php"); ?>
    <!-- End Services -->
  <?php endif; ?>

  <?php if ($_GET["pages"] === "gallery") : ?>
    <!-- ======= Gallery ======= -->
    <?php include("../templates/gallery.php"); ?>
    <!-- End Gallery -->
  <?php endif; ?>

  <?php if ($_GET["pages"] === "team") : ?>
    <!-- ======= Team ======= -->
    <?php include("../templates/team.php"); ?>
    <!-- End Team -->
  <?php endif; ?>

  <?php if ($_GET["pages"] === "about") : ?>
    <!-- ======= About ======= -->
    <?php include("../templates/about.php"); ?>
    <!-- End About -->
  <?php endif; ?>

  <?php if ($_GET["pages"] === "contact") : ?>
    <!-- ======= Contact ======= -->
    <?php include("../templates/contact.php"); ?>
    <!-- End Contact -->
  <?php endif; ?>

  <?php if ($_GET["pages"] === "messages") : ?>
    <!-- ======= Messages ======= -->
    <?php include("../templates/messages.php"); ?>
    <!-- End Messages -->
  <?php endif; ?>

  <?php if ($_GET["pages"] === "profile") : ?>
    <!-- ======= Profile ======= -->
    <?php include("../templates/profile.php"); ?>
    <!-- End Profile -->
  <?php endif; ?>

  <!-- ======= Footer ======= -->
  <?php include("../templates/footer.php"); ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php include("../templates/modals.php"); ?>

  <?php include("../templates/javascripts.php"); ?>

  <!-- Template Main JS File Loading Animation-->
  <script src="<?= $url; ?>assets/js/jquery.min.js"></script>
  <script src="<?= $url; ?>assets/js/welcome-loading.js"></script>

</body>

</html>