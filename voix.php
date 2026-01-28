<?php
// Charger les articles depuis un fichier JSON
$articles = json_decode(file_get_contents('data/articles.json'), true);

// Pour gérer l'onglet actif dans la navbar
$currentPage = basename($_SERVER['PHP_SELF']); // e.g. "voix.php"
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Espace de transmission – Les Chroniques d’un Rêveur</title>
  <link rel="stylesheet" href="voix.css">
  <link rel="stylesheet" href="main.css?v=1.0">
</head>

<body class="page-voix">

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
      <li><a href="voix.php" class="active">Voix du rêveur</a></li>
      <li><a href="about.php">À propos</a></li>
    </ul>

  </nav>

  <!-- Le header principal -->
  <header class="voix-header">
    <h1>Espace de transmission</h1>
    <p class="voix-subtitle">
      Découvrez les articles publiés récemment et plongez dans l'univers poétique du projet.
    </p>
  </header>

  <main class="episodes-grid">
    <?php foreach ($articles as $article): ?>
      <div class="episode-card">
        <!-- Lien vers la page spécifique de l'article -->
        <a href="article.php?id=<?= $article['id'] ?>">
          <div class="episode-thumb" style="background-image:url('images/articles/<?= htmlspecialchars($article['image']) ?>')">
            <div class="overlay-episode">
              <h2><?= htmlspecialchars($article['title']) ?></h2>
              <p><?= htmlspecialchars($article['excerpt']) ?></p>
            </div>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </main>

  <script src="js/script.js"></script>
</body>
</html>
