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
  
  <!-- Style global -->
  <link rel="stylesheet" href="style.css">

  <!-- Style spécifique à la page -->
  <link rel="stylesheet" href="voix.css?v=3">
</head>

<body class="page-voix">

  <!-- NAVIGATION -->
  <nav class="main-menu">
    <a href="index.php" class="site-logo">
      <img src="images/logo.png" alt="Les Chroniques d’un Rêveur">
    </a>
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <li><a href="episodes.php">Épisodes</a></li>
      <li><a href="live.php">Live</a></li>
      <li><a href="carnet.php">Carnet d’images</a></li>
      <li><a href="voix.php" class="active">Voix du rêveur</a></li>
      <li><a href="about.php">À propos</a></li>
    </ul>
  </nav>

  <!-- HEADER -->
  <header class="voix-header">
    <h1>Espace de transmission</h1>
    <p class="voix-subtitle">
      Découvrez les articles publiés récemment et plongez dans l'univers poétique du projet.
    </p>
  </header>

  <!-- GRILLE DES ARTICLES -->
  <main class="articles-grid">
    <?php foreach ($articles as $article): ?>
      
      <!-- Carte cliquable -->
      <a href="<?= htmlspecialchars($article['link']) ?>" target="_blank" class="article-card">

        <!-- Image -->
        <div class="article-thumb"
             style="background-image: url('<?= htmlspecialchars($article['image']) ?>')">
        </div>

        <!-- Texte -->
        <div class="article-content">
          <h2><?= htmlspecialchars($article['title']) ?></h2>
          <p><?= htmlspecialchars($article['excerpt']) ?></p>
        </div>

      </a>

    <?php endforeach; ?>
  </main>

  <script src="js/script.js"></script>
</body>
</html>
