<?php error_reporting(1); ?>
<!-- Vendor JS Files -->
<script src="<?= $url; ?>admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="<?= $url; ?>admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= $url; ?>admin/assets/vendor/chart.js/chart.min.js"></script>
<script src="<?= $url; ?>admin/assets/vendor/echarts/echarts.min.js"></script>
<script src="<?= $url; ?>admin/assets/vendor/quill/quill.min.js"></script>
<script src="<?= $url; ?>admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="<?= $url; ?>admin/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="<?= $url; ?>admin/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= $url; ?>admin/assets/js/main.js"></script>

<!-- PDF -->
<script src="<?= $url; ?>assets/js/jspdf.umd.js "></script>
<script src="<?= $url; ?>assets/js/html2canvas.js"></script>

<!-- Medical Records -->
<?php if ($_GET["print"] === "medical-record") : ?>
  <?php foreach ($patients as $rowPatients) : ?>
    <?php if ($rowPatients["no_rekam_medis"] === base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST["no_rekam_medis"])))))))))) : ?>
      <script>
        window.jsPDF = window.jspdf.jsPDF;
        var docPDF = new jsPDF();

        function print() {
          var elementHTML = document.querySelector("#printMedicalRecords");
          docPDF.html(elementHTML, {
            callback: function(docPDF) {
              docPDF.save('Rekam Medis - <?= $rowPatients["nama_pasien"]; ?>.pdf');
            },
            x: 2,
            y: 5,
            width: 170,
            windowWidth: 650
          });
        }
      </script>
    <?php endif; ?>
  <?php endforeach; ?>
<?php endif; ?>

<!-- Card Control -->
<?php if ($_GET["print"] === "card-control") : ?>
  <?php foreach ($patients as $rowPatients) : ?>
    <?php if ($rowPatients["no_rekam_medis"] === base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST["no_rekam_medis"])))))))))) : ?>
      <script>
        window.jsPDF = window.jspdf.jsPDF;
        var docPDF = new jsPDF();

        function print() {
          var elementHTML = document.querySelector("#printCardControl");
          docPDF.html(elementHTML, {
            callback: function(docPDF) {
              docPDF.save('Kartu Kontrol - <?= $rowPatients["nama_pasien"]; ?>.pdf');
            },
            x: 2,
            y: 5,
            width: 100,
            windowWidth: 650
          });
        }
      </script>
    <?php endif; ?>
  <?php endforeach; ?>
<?php endif; ?>

<script src="//cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>

<script>
  CKEDITOR.replace('visi');
  CKEDITOR.replace('misi');
  CKEDITOR.replace('add_description_about');

  <?php foreach ($about as $row) : ?>
    CKEDITOR.replace('edit_description_about<?= $row["id"]; ?>');
  <?php endforeach; ?>

  <?php foreach ($contact as $row) : ?>
    CKEDITOR.replace('edit_description_address<?= $row["id"]; ?>');
    CKEDITOR.replace('edit_service_hours<?= $row["id"]; ?>');
  <?php endforeach; ?>

  <?php $idCkEditor = 1; ?>
  <?php foreach ($patients as $rowPatients) : ?>
    CKEDITOR.replace('medis<?= $idCkEditor; ?>');
    CKEDITOR.replace('paramedis<?= $idCkEditor; ?>');
    CKEDITOR.replace('keterangan<?= $idCkEditor; ?>');
    <?php $idCkEditor++; ?>
  <?php endforeach; ?>
</script>