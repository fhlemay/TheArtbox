<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>The ArtBox</title>
</head>

<body>
  <?php require_once 'header.php'; ?>
  <main>

    <!-- obtenir les données de l'oeuvre demandée -->
    <?php

    if (!isset($_GET['id'])) {
      echo "Aucune oeuvre sélectionnée.";
      return;
    }

    require_once 'oeuvres.php';
    require_once 'functions.php';

    $oeuvre = getOeuvre($oeuvres, $_GET['id']);

    if (!$oeuvre) {
      echo "Aucune oeuvre n'a l'identifiant " . $_GET['id'];
      return;
    }

    ?>

    <article id="detail-oeuvre">
      <div id="img-oeuvre">

        <img src="img/<?php echo $oeuvre['imageFile'] ?>.png" alt="<?php echo $oeuvre['title'] ?>">
      </div>
      <div id="contenu-oeuvre">
        <h1>
          <?php echo $oeuvre['title'] ?>
        </h1>
        <p class="description">
          <?php echo $oeuvre['description'] ?>
        </p>
        <p class="description-complete">
          <?php echo $oeuvre['descriptionComplete'] ?>
        </p>
      </div>
    </article>

  </main>
  <?php require_once 'footer.php' ?>
</body>

</html>
