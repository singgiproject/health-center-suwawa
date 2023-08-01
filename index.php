<?php
// CONNECT FUNCTIONS
require('funct/functions.php');

// === INCLUDES ===
include("includes/table/query.php");
include("includes/visitor/counter.php");
include("includes/count/counts.php");
include("includes/date/date-id.php");
include("includes/date/date.php");

?>
<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php include("includes/head/head.php"); ?>

<body>

  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50  align-items-center justify-content-center load-welcome">
    <img src="<?= $logo; ?>" alt="" class="loading-animation loading-logo">
    <img src="<?= $url; ?>assets/img/logo/loading2.gif?v=<?= time(); ?>" alt="" class="loading-animation">
    <p><?= $title; ?></p>
  </div>
  <!-- Spinner End -->

  <!-- ======= Header ======= -->
  <?php include("includes/frontend/templates/header.php"); ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <?php include("includes/frontend/templates/hero.php"); ?>
  <!-- End Hero -->

  <!-- ======= Announcement Info Section ======= -->
  <?php include("includes/frontend/templates/announcement-info.php"); ?>
  <!-- End Announcement Info -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <?php include("includes/frontend/templates/about.php"); ?>
    <!-- End About Section -->

    <!-- ======= Team Section ======= -->
    <?php include("includes/frontend/templates/team.php"); ?>
    <!-- End Team Section -->

    <!-- ======= Service Section ======= -->
    <?php include("includes/frontend/templates/service.php"); ?>
    <!-- End Service Section -->

    <!-- ======= Counts Section ======= -->
    <?php include("includes/frontend/templates/counts.php"); ?>
    <!-- End Counts Section -->

    <!-- ======= F.A.Q Section ======= -->
    <?php include("includes/frontend/templates/faq.php"); ?>
    <!-- End F.A.Q Section -->

    <!-- ======= Gallery Section ======= -->
    <?php include("includes/frontend/templates/gallery.php"); ?>
    <!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <?php include("includes/frontend/templates/satisfaction-survey.php"); ?>
    <!-- End Testimonials Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("includes/frontend/templates/footer.php"); ?>
  <!-- End Footer -->

  <!-- ======= Mobile ======= -->
  <?php include("includes/frontend/mobile/bottom-bar.php"); ?>
  <!-- End Mobile -->

  <!-- ======= Modals ======= -->
  <?php include("includes/frontend/alerts/modals.php"); ?>
  <!-- ======= end Modal ======= -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- ======= Inlcude Javascript in file PHP  ======= -->
  <?php include("includes/js/all-js.php"); ?>
  <!-- ======= end Inlcude Javascript in file PHP  ======= -->

</body>

</html>