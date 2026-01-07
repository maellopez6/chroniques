<?php
// Charger les épisodes depuis un fichier JSON
$episodes = json_decode(file_get_contents('data/episodes.json'), true);

// Pour gérer l'onglet actif dans la navbar
$currentPage = basename($_SERVER['PHP_SELF']); // e.g. "episodes.php"

// Temps serveur (Europe/Paris)
date_default_timezone_set('Europe/Paris');
$hour = (int)date('G');

$forced = isset($_GET['time']) ? $_GET['time'] : null;
$timeClass = 'time-day';

if ($forced) {
    $allowed = ['day','dawn','dusk','night'];
    if (in_array($forced, $allowed, true)) {
        $timeClass = 'time-' . $forced;
    }
} else {
    if ($hour >= 6 && $hour < 9) $timeClass = 'time-dawn';
    elseif ($hour >= 9 && $hour < 18) $timeClass = 'time-day';
    elseif ($hour >= 18 && $hour < 21) $timeClass = 'time-dusk';
    else $timeClass = 'time-night';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fragments du rêve – Les Chroniques d’un Rêveur</title>
  <link rel="stylesheet" href="episodes.css">
</head>

<body class="page-episodes <?php echo $timeClass; ?>">

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

<header class="header">
  <a href="index.php" class="back-link">← Retour au seuil</a>
  <h1>Les fragments du rêve</h1>
</header>

<main class="episodes-grid">
  <?php foreach ($episodes as $ep): ?>
    <div class="episode-card">

      <!-- Conteneur vidéo -->
      <div class="episode-video-container">
        <video class="episode-video" preload="metadata" muted loop>
          <source src="videos/test.mp4" type="video/mp4">
          Votre navigateur ne supporte pas la vidéo.
        </video>

        <div class="overlay-episode">
          <h2><?= htmlspecialchars($ep['title']) ?></h2>
          <p><?= htmlspecialchars($ep['quote']) ?></p>
        </div>
      </div>

    </div>
  <?php endforeach; ?>
</main>

<script>
document.querySelectorAll('.episode-video-container').forEach(container => {
    const video = container.querySelector('.episode-video');
    container.addEventListener('mouseenter', () => { video.play(); });
    container.addEventListener('mouseleave', () => { video.pause(); video.currentTime = 0; });
});
</script>


<!-- Boîte pour phrases poétiques -->
<div id="phraseBox" class="poetic-phrase"></div>

<!-- Poetic SVG elements -->
<svg class="poetic-element star" data-type="star" width="40" height="40" viewBox="0 0 24 24">
  <polygon points="12 2 15 10 23 10 17 14 19 22 12 17 5 22 7 14 1 10 9 10" fill="url(#starGradient)" stroke="gold" stroke-width="1"/>
  <defs>
    <radialGradient id="starGradient" cx="50%" cy="50%" r="50%">
      <stop offset="0%" stop-color="#fff"/>
      <stop offset="100%" stop-color="#ffd966"/>
    </radialGradient>
  </defs>
</svg>

<!-- Porte réaliste -->
<svg class="poetic-element door" data-type="door" width="50" height="70" viewBox="0 0 50 70">
  <defs>
    <linearGradient id="doorGradient" x1="0" y1="0" x2="0" y2="1">
      <stop offset="0%" stop-color="#d4a373"/>
      <stop offset="100%" stop-color="#8b5e3c"/>
    </linearGradient>
  </defs>
  <rect x="5" y="5" width="40" height="60" rx="4" fill="url(#doorGradient)" stroke="#fff" stroke-width="1"/>
  <circle cx="35" cy="35" r="3" fill="#fff"/>
</svg>

<!-- Miroir réaliste -->
<svg class="poetic-element mirror" data-type="mirror" width="40" height="50" viewBox="0 0 24 30">
  <defs>
    <linearGradient id="mirrorGradient" x1="0" y1="0" x2="0" y2="1">
      <stop offset="0%" stop-color="#e0f7ff" stop-opacity="0.4"/>
      <stop offset="100%" stop-color="#99d1ff" stop-opacity="0.1"/>
    </linearGradient>
  </defs>
  <ellipse cx="12" cy="15" rx="10" ry="14" fill="url(#mirrorGradient)" stroke="#fff"
