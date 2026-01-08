<?php
// Page À propos — Les Chroniques d’un rêveur
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>À propos — Le manifeste du rêveur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS spécifique à la page -->
    <link rel="stylesheet" href="about.css">
</head>

<body class="page-about">

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


    <!-- En-tête poétique -->
    <header class="header">
        <a href="index.php" class="back-link">← Retour au seuil</a>
        <h1>Le manifeste du rêveur</h1>
        <p class="subtitle">
            Un projet né dans les silences, les images et les passages.
        </p>
    </header>

    <!-- Manifeste -->
    <section class="manifesto">
        <p>
            <em>Les Chroniques d’un rêveur</em> est un projet audiovisuel et numérique
            né d’un désir simple : ralentir.
            Donner au regard le temps de s’attarder,
            à l’image celui de respirer,
            et au spectateur celui de devenir rêveur à son tour.
        </p>

        <p>
            Chaque fragment, chaque épisode, chaque image est pensé comme
            une trace.
            Une mémoire imparfaite, suspendue entre veille et sommeil.
            Le site prolonge le film : il n’explique pas,
            il invite.
        </p>

        <p>
            Ici, le numérique n’est pas un outil de diffusion,
            mais un territoire sensible,
            un espace de passage où l’on chemine plus qu’on ne navigue.
        </p>
    </section>

    <!-- Équipe -->
    <section class="team">
        <h2>L’équipe</h2>

        <div class="team-grid">
            <figure class="team-member">
                <img src="images/team/membre1.jpg" alt="Portrait du rêveur">
                <figcaption>
                    <strong>Nom Prénom</strong><br>
                    Rôle — regard, écriture, mise en scène
                </figcaption>
            </figure>

            <figure class="team-member">
                <img src="images/team/membre2.jpg" alt="Portrait membre">
                <figcaption>
                    <strong>Nom Prénom</strong><br>
                    Rôle — image, montage, souffle
                </figcaption>
            </figure>

            <!-- Tu peux dupliquer ce bloc -->
        </div>
    </section>

    <!-- Partenaires -->
    <section class="partners">
        <h2>Partenaires & ressources</h2>

        <ul class="partners-list">
            <li><a href="#" target="_blank">Dossier de production (PDF)</a></li>
            <li><a href="#" target="_blank">École / Ydays</a></li>
            <li><a href="#" target="_blank">Partenaire artistique</a></li>
        </ul>
    </section>

</body>
</html>
