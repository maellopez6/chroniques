<?php
// Charger les épisodes depuis un fichier JSON
$episodes = json_decode(file_get_contents('data/episodes.json'), true);

// Pour gérer l'onglet actif dans la navbar
$currentPage = basename($_SERVER['PHP_SELF']); // e.g. "episodes.php"
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les souvenirs du rêve – Les Chroniques d’un Rêveur</title>
  <link rel="stylesheet" href="episodes.css?v=1.0">
</head>

<body class="page-episodes">

  <nav class="main-menu">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="episodes.php">Épisodes</a></li>
        <li><a href="live.php">Live</a></li>
        <li><a href="carnet.php">Carnet d’images</a></li>
        <li><a href="voix.php">Voix du rêveur</a></li>
        <li><a href="about.php">À propos</a></li>
    </ul>
</nav>


  <!-- Le header principal -->
  <header class="header">
    <a href="index.php" class="back-link">← Retour au seuil</a>
    <h1>Les souvenirs du rêve</h1>
  </header>

  <main class="episodes-grid">
    <?php foreach ($episodes as $ep): ?>
      <div class="episode-card">
        <div class="episode-thumb" style="background-image:url('images/<?= htmlspecialchars($ep['thumb']) ?>')">
          <div class="overlay-episode">
            <h2><?= htmlspecialchars($ep['title']) ?></h2>
            <p><?= htmlspecialchars($ep['quote']) ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </main>

  <script src="js/script.js"></script>
</body>
</html>