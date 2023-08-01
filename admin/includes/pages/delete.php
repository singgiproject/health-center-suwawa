<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location:../auth/login");
  exit;
}

require('../funct/functions.php');
include("../includes/table/query.php");

// URL WEBSITE
$url = $rowHead['url'];


// ========================================
// DELETE MESSAGE
// ========================================
if (isset($_GET["message"])) {
  $idMessage = $_GET["message"];
  if (deleteMessage($idMessage) > 0) {
    echo "
    <script>
      alert('Data berhasil dihapus!');
      document.location.href = 'messages';
    </script>
    ";
  }
}


// ========================================
// DELETE APPOINTMENTS
// ========================================
if (isset($_POST["delete_appointment"])) {
  $idAppointment = base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST["id"])))))))));
  if (deleteAppointment($idAppointment) > 0) {
    echo "
    <script>
      alert('Data berhasil dihapus!');
      document.location.href = 'appointments';
    </script>
    ";
  }
}
