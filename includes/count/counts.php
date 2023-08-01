<?php
// COUNT VISITOR (IP ADDRESS)
$countVisitor = $conn->query("SELECT COUNT(*) countVisitor FROM tb_visitor");
$resultVisitor = mysqli_fetch_assoc($countVisitor);

// COUNT SERVICE
$countService = $conn->query("SELECT COUNT(*) countService FROM tb_service");
$resultService = mysqli_fetch_assoc($countService);

// COUNT MESSAGE
$countMessage = $conn->query("SELECT COUNT(*) countMessage FROM tb_messages");
$resultMessage = mysqli_fetch_assoc($countMessage);

// COUNT GALLERY
$countGallery = $conn->query("SELECT COUNT(*) countGallery FROM tb_gallery");
$resultGallery = mysqli_fetch_assoc($countGallery);

// COUNT ACCOUNT
$countAccount = $conn->query("SELECT COUNT(*) countAccount FROM tb_users");
$resultAccount = mysqli_fetch_assoc($countAccount);

// COUNT TEAM
$countTeam = $conn->query("SELECT COUNT(*) countTeam FROM tb_team");
$resultTeam = mysqli_fetch_assoc($countTeam);

// COUNT PATIENT
$countPatient = $conn->query("SELECT COUNT(*) countPatient FROM tb_patients");
$resultPatient = mysqli_fetch_assoc($countPatient);

// COUNT MEDICAL RECORD
$countMedicalRecord = $conn->query("SELECT COUNT(DISTINCT no_rekam_medis) countMedicalRecord FROM tb_medical_records");
$resultMedicalRecord = mysqli_fetch_assoc($countMedicalRecord);


// COUNT SATISFACTION SURVEY (all)
$countAllSatisfied = $conn->query("SELECT COUNT(*) countAllSatisfied FROM tb_satisfaction_survey");
$resultAllSatisfied = mysqli_fetch_assoc($countAllSatisfied);

// COUNT SATISFACTION SURVEY (satisfied)
$countSatisfied = $conn->query("SELECT COUNT(*) countSatisfied FROM tb_satisfaction_survey WHERE survey = 'Puas' ");
$resultSatisfied = mysqli_fetch_assoc($countSatisfied);

// COUNT SATISFACTION SURVEY (Less Satisfied)
$countLessSatisfied = $conn->query("SELECT COUNT(*) countLessSatisfied FROM tb_satisfaction_survey WHERE survey = 'Kurang Puas' ");
$resultLessSatisfied = mysqli_fetch_assoc($countLessSatisfied);

// COUNT SATISFACTION SURVEY (Not Satisfied)
$countNotSatisfied = $conn->query("SELECT COUNT(*) countNotSatisfied FROM tb_satisfaction_survey WHERE survey = 'Tidak Puas' ");
$resultNotSatisfied = mysqli_fetch_assoc($countNotSatisfied);

// COUNT MEDICAL RECORD (NOT EMPTY)
// foreach ($patients as $rowPatients) {
//   $noRekamMedis = $rowPatients["no_rekam_medis"];
//   $resultMedicalRecords = mysqli_query($conn, "SELECT no_rekam_medis FROM tb_medical_records WHERE no_rekam_medis = '$noRekamMedis' ");
//   if (mysqli_fetch_assoc($resultMedicalRecords)) {
//     var_dump($rowPatients["id"]);
//     die;
//   }
// }
