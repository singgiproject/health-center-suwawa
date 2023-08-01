<?php
// ------------------------------------------------
// PATIENT
// ------------------------------------------------
// === QUERY PATIENT ===
$patients = query_patients("SELECT * FROM tb_patients");

$medicalRecords = query_medical_records("SELECT * FROM tb_medical_records");


// ------------------------------------------------
// CAROUSEL
// ------------------------------------------------
// === QUERY TABLE CAROUSEL ===
$carousel = query("SELECT * FROM tb_carousel");

// === QUERY TABLE CAROUSEL END DATA===
$resultCarouselEnd = $conn->query("SELECT * FROM tb_carousel ORDER BY id DESC LIMIT 1");
$rowcarouselEnd = mysqli_fetch_assoc($resultCarouselEnd);

// ------------------------------------------------
// ANNOUNCEMENT
// ------------------------------------------------
// === QUERY TABLE ANNOUNCEMENT ===
$announcement = query("SELECT * FROM tb_announcement");

// === QUERY TABLE ANNOUNCEMENT ===
$resultAnnouncement = $conn->query("SELECT * FROM tb_announcement");
$rowAnnouncement = mysqli_fetch_assoc($resultAnnouncement);

// === QUERY TABLE ANNOUNCEMENT END DATA===
$resultAnnouncementEnd = $conn->query("SELECT * FROM tb_announcement ORDER BY id DESC LIMIT 1");
$rowAnnouncementEnd = mysqli_fetch_assoc($resultAnnouncementEnd);

// ------------------------------------------------
// SERVICE
// ------------------------------------------------
// === QUERY TABLE SERVICE ===
$service = query("SELECT * FROM tb_service");

// === QUERY TABLE SERVICE END DATA===
$resultServiceEnd = $conn->query("SELECT * FROM tb_service ORDER BY id DESC LIMIT 1");
$rowServiceEnd = mysqli_fetch_assoc($resultServiceEnd);

// ------------------------------------------------
// CATEGORY
// ------------------------------------------------
// === QUERY TABLE CATEGORY ===
$category = query("SELECT * FROM tb_category");

// === QUERY TABLE CATEGORY END DATA===
$resultCategoryEnd = $conn->query("SELECT * FROM tb_category ORDER BY id DESC LIMIT 1");
$rowCategoryEnd = mysqli_fetch_assoc($resultCategoryEnd);

// ------------------------------------------------
// GALLERY
// ------------------------------------------------
// === QUERY TABLE GALLERY ===
$gallery = query("SELECT * FROM tb_gallery ORDER BY id DESC LIMIT 8");
$galleryAll = query("SELECT * FROM tb_gallery ORDER BY id DESC");

// === QUERY TABLE GALERY GET ID===
if (!empty($_GET["detail-gallery"])) {
  $idGalery = $_GET["detail-gallery"];
  $queryGalery = query("SELECT * FROM tb_gallery WHERE id = '$idGalery' ")[0];
}

// ------------------------------------------------
// ABOUT
// ------------------------------------------------
$about = query("SELECT * FROM tb_about");

// === QUERY TABLE ABOUT ===
$resultAbout = $conn->query("SELECT * FROM tb_about");
$rowAbout = mysqli_fetch_assoc($resultAbout);

// ------------------------------------------------
// CONTACT
// ------------------------------------------------
// === QUERY TABLE CONTACT ===
$contact = query("SELECT * FROM tb_contact");

$resultContact = $conn->query("SELECT * FROM tb_contact");
$rowContact = mysqli_fetch_assoc($resultContact);

// ------------------------------------------------
// MESSAGES/CONTACT SEND
// ------------------------------------------------
// === QUERY TABLE MESSAGES ===
$messages = query("SELECT * FROM tb_messages");

// ------------------------------------------------
// SATISFACTION SURVEY
// ------------------------------------------------
// === QUERY TABLE SATISFACTION SURVEY ===
$satisfactionSurvey = query("SELECT * FROM tb_satisfaction_survey ORDER BY id DESC");

$resultSatisfactionSurvey = $conn->query("SELECT * FROM tb_satisfaction_survey");
$rowSatisfactionSurvey = mysqli_fetch_assoc($resultSatisfactionSurvey);

// === QUERY TABLE SATISFACTION SURVEY END DATA===
$resultSatisfactionSurveyEnd = $conn->query("SELECT * FROM tb_satisfaction_survey ORDER BY id DESC LIMIT 1");
$rowSatisfactionSurveyEnd = mysqli_fetch_assoc($resultSatisfactionSurveyEnd);


// ------------------------------------------------
// VISITOR
// ------------------------------------------------
// === QUERY TABLE VISITOR ===
$visitor = query("SELECT * FROM tb_visitor ORDER BY id DESC");

// ------------------------------------------------
// TEAM
// ------------------------------------------------
// === QUERY TABLE TEAM ===
$team = query("SELECT * FROM tb_team");

// query team doctor
$teamKaryawanPuskesmas = query("SELECT * FROM tb_team WHERE position = 'Karyawan Puskesmas' ");

// query team doctor assistant
$teamAssistant = query("SELECT * FROM tb_team WHERE position = 'Asisten' ");

// query team Operator Puskesmas
$teamOperatorPuskesmas = query("SELECT * FROM tb_team WHERE position = 'Operator Puskesmas' ");

// query team Technician Puskesmas
$teamTechnicianPuskesmas = query("SELECT * FROM tb_team WHERE position = 'Teknisi Puskesmas' ");

// query team CSDDC
$teamCSPuskesmas = query("SELECT * FROM tb_team WHERE position = 'CS Puskesmas' ");

// === QUERY TABLE TEAM END DATA===
$resultTeamEnd = $conn->query("SELECT * FROM tb_team ORDER BY id DESC LIMIT 1");
$rowTeamEnd = mysqli_fetch_assoc($resultTeamEnd);

// ------------------------------------------------
// VIDEOS
// ------------------------------------------------
// === QUERY TABLE VIDEOS ===
$videos = query("SELECT * FROM tb_videos");

// === QUERY TABLE VIDEOS END DATA===
$resultVideosEnd = $conn->query("SELECT * FROM tb_videos ORDER BY id DESC LIMIT 1");
$rowVideosEnd = mysqli_fetch_assoc($resultVideosEnd);
