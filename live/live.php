<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Espace Live — Les Chroniques d’un Rêveur</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="live.css">

  <!-- Twitch Player SDK -->
  <script src="https://player.twitch.tv/js/embed/v1.js"></script>
</head>

<body class="page-live">

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
      <li><a href="voix.php">Voix du rêveur</a></li>
      <li><a href="about.php">À propos</a></li>
    </ul>
  </nav>

  <!-- HEADER -->
  <header class="live-header">
    <h1>Le présent du rêve</h1>
    <p class="live-subtitle">
      Ici, le rêve respire au présent.
    </p>
  </header>

  <!-- PLAYER LIVE -->
  <section class="live-player">

    <div class="video-wrapper">
      <div id="twitch-player"></div>
    </div>

    <div class="live-status">
      <span class="dot" id="liveDot"></span>
      <span id="liveText">Vérification du live...</span>
    </div>

  </section>

  <!-- INFOS STREAM DYNAMIQUES -->
  <section class="live-details">
    <h2 id="streamTitle"></h2>
    <p id="streamCategory"></p>
  </section>

  <!-- CHAT POÉTIQUE -->
  <section class="live-chat">
    <h2>Paroles partagées</h2>

    <div class="chat-messages">
      <p><span>✧</span> La lumière semble écouter.</p>
      <p><span>✧</span> Ce silence me parle.</p>
    </div>

    <form class="chat-form">
      <input type="text" placeholder="Laisser une trace…" disabled>
    </form>

    <p class="chat-note">
      Le chat Twitch apparaîtra lors des diffusions.
    </p>
  </section>

  <!-- ARCHIVES -->
  <section class="live-archives">
    <h2>Moments conservés</h2>

    <div class="archives-grid">

      <div class="archive-card">
        <img src="images/live1.jpg" alt="">
        <div class="archive-overlay">
          <h3>Entretien — Origine du rêve</h3>
        </div>
      </div>

      <div class="archive-card">
        <img src="images/live2.jpg" alt="">
        <div class="archive-overlay">
          <h3>Capsule — La nuit du tournage</h3>
        </div>
      </div>

    </div>
  </section>

  <!-- SCRIPT LIVE -->
  <script src="js/live.js"></script>

</body>
</html>
