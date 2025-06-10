<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/theme.css">
     <!-- Slick CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- <link rel="stylesheet" href="css/theme1.css">
    <script src="js/theme.js"></script> -->
</head>
<body style="overflow-x: hidden; width: 100vw; height: 100%; margin: 0; padding: 0;">
<?php include 'components/header.php'; ?>
<?php include 'components/hero.php'; ?>
<?php include 'pages/home.php'; ?>





  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Slick JS -->
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script>
    $('.slider').slick({
      autoplay: true,
      arrows: false,
      dots: true,
      fade: true,
      speed: 1000,
      infinite: true,
      cssEase: 'ease',
      touchThreshold: 100
    });
  </script>
</body>
</html>