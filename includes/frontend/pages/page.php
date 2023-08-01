<?php
// CONNECT FUNCTIONS
require('../../../funct/functions.php');

// === INCLUDES ===
include("../../../includes/table/query.php");
include("../../../includes/visitor/counter.php");
include("../../../includes/count/counts.php");
include("../../../includes/date/date-id.php");
include("../../../includes/date/date.php");

?>
<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php include("../../../includes/head/head.php"); ?>

<body>


  <!-- ======= Header ======= -->
  <?php include("../../../includes/frontend/templates/header.php"); ?>
  <!-- End Header -->


  <main id="main">

    <!-- ======= Detail About Section ======= -->
    <?php if (isset($_GET["page"])) : ?>
      <?php if ($_GET["page"] === "about") : ?>
        <?php include("../../../includes/frontend/templates/detail-about.php"); ?>
      <?php endif; ?>
    <?php endif; ?>
    <!-- End Detail About Section -->

    <!-- ======= Detail Gallery Section ======= -->
    <?php if (isset($_GET["detail-gallery"])) : ?>
      <?php include("../../../includes/frontend/templates/detail-gallery.php"); ?>
    <?php endif; ?>
    <!-- End Detail Gallery Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("../../../includes/frontend/templates/footer.php"); ?>
  <!-- End Footer -->

  <!-- ======= Mobile ======= -->
  <?php include("../../../includes/frontend/mobile/bottom-bar.php"); ?>
  <!-- End Mobile -->

  <!-- ======= Modals ======= -->
  <?php include("../../../includes/frontend/alerts/modals.php"); ?>
  <!-- ======= end Modal ======= -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- ======= Inlcude Javascript in file PHP  ======= -->
  <?php include("../../../includes/js/all-js.php"); ?>
  <!-- ======= end Inlcude Javascript in file PHP  ======= -->

</body>

</html>