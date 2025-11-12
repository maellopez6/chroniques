<?php
// Charger les épisodes depuis un fichier JSON
$episodes = json_decode(file_get_contents('data/episodes.json'), true);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fragments du rêve – Les Chroniques d’un Rêveur</title>
  <link rel="stylesheet" href="episodes.css">
</head>
<body class="page-episodes">

  <header class="header">
    <a href="index.php" class="back-link">← Retour au seuil</a>
    <h1>Les fragments du rêve</h1>
  </header>

  <main class="episodes-grid">
    <?php foreach($episodes as $ep): ?>
      <div class="episode-card">
        <div class="episode-thumb" style="background-image:url('images/<?= $ep['thumb'] ?>')">
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

