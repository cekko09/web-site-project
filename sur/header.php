<?php 
require_once "./admin/baglanti.php";
include_once "./function.php";

;

$ayarlar = $baglan->prepare("SELECT * FROM ayarlar where id=1");
$ayarlar->execute();
$ayarlarcek = $ayarlar->fetch(PDO::FETCH_ASSOC);

$hakkimizda = $baglan->prepare("SELECT * FROM hakkimizda where id=1");
$hakkimizda->execute();
$hakkimizdacek = $hakkimizda->fetch(PDO::FETCH_ASSOC);

$slider = $baglan->prepare("SELECT * FROM slider order by sira");
$slider->execute();

$icerik = $baglan->prepare("SELECT * FROM icerik order by sira");
$icerik->execute();

$logo = $baglan->prepare("SELECT * FROM sitelogo where id=1");
$logo->execute();
$logocek = $logo->fetch(PDO::FETCH_ASSOC);

$galeri = $baglan->prepare("SELECT * FROM galeri order by sira asc limit 9");
$galeri->execute();




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fix Kebap Kahvaltı</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="vertical-carousel.css" />
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playball&display=swap" rel="stylesheet">
  <!-- Add the slick-theme.css if you want default styling -->
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" href="wow/css/libs/animate.css">

<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Playball&display=swap" rel="stylesheet">
    <script src="wow/dist/wow.js"></script>
    



</head>

  <nav class="navbar navbar-expand-lg " id="nav">
        <div class="container-fluid">
            <a  class="gizle"  href="#"><img src="resimlerSite/logo-site/<?= $logocek["resim"] ?>" alt=""></a>
          <button class="navbar-toggler" id="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="" ><i style="color:white !important;" id="icon" class="fa-solid fa-bars icon"></i></span>
          </button>
          <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link "  href="anasayfa">Kafemiz </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="hakkimizda">Hakkımızda </a>
              </li>
              <a class="navbar-brand" href="anasayfa"><img src="resimlerSite/logo-site/<?= $logocek["resim"] ?>" alt=""></a>
              <li class="nav-item">
                <a class="nav-link" href="#">Galeri </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">İletişim </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<body>
   