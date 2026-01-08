<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Carnet d’images — Les Chroniques d’un Rêveur</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="carnet.css?v=1.0">
</head>

<body class="page-carnet">

  <!-- MENU -->
  <nav class="main-menu">
  <!-- LOGO -->
  <a href="index.php" class="site-logo">
    <img src="images/logo.png" alt="Les Chroniques d’un Rêveur">
  </a>

  <!-- MENU -->
  <ul>
    <li><a href="index.php">Accueil</a></li>
    <li><a href="episodes.php">Épisodes</a></li>
    <li><a href="live.php">Live</a></li>
    <li><a href="carnet.php">Carnet d’images</a></li>
    <li><a href="voix.php">Voix du rêveur</a></li>
    <li><a href="about.php">À propos</a></li>
  </ul>
</nav>

  <!-- HEADER -->
  <header class="carnet-header">
    <h1>Carnet d’images</h1>
    <p>Souvenirs visuels, fragments de tournage, traces du rêve.</p>
  </header>

  <!-- GALERIE -->
  <main class="carnet-gallery">

    <figure class="carnet-item" data-note="La lumière était déjà là.">
      <img src="images/carnet/img1.jpg" alt="">
      <figcaption>Polaroid — veille de tournage</figcaption>
    </figure>

    <figure class="carnet-item" data-note="Un silence entre deux prises.">
      <img src="images/carnet/img2.jpg" alt="">
      <figcaption>Décor abandonné</figcaption>
    </figure>

    <figure class="carnet-item" data-note="Le rêve se construit dans l’attente.">
      <img src="images/carnet/img3.jpg" alt="">
      <figcaption>Fragment nocturne</figcaption>
    </figure>

  </main>

  <!-- NOTE MANUSCRITE -->
  <div class="note-popup" id="notePopup"></div>

  <script src="js/carnet.js"></script>
</body>
</html>
