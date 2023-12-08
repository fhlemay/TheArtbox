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
    <div id="liste-oeuvres">

      <!-- inclusion des données du projet -->
      <?php require_once 'oeuvres.php'; ?>

      <!-- génération de la carte de chaque donnée -->
      <?php foreach ($oeuvres as $oeuvre) : ?>
        <article class="oeuvre">
          <a href="oeuvre.php?id=<?php echo $oeuvre['id'] ?>">
            <img src="img/<?php echo $oeuvre['imageFile'] ?>.png" alt="<?php echo $oeuvre['title'] ?>">
            <h2><?php echo $oeuvre['title'] ?></h2>
            <p class="description"><?php echo $oeuvre['description'] ?></p>
          </a>
        </article>
      <?php endforeach ?>

    </div>
  </main>
  <?php require_once 'footer.php' ?>
</body>

</html>
