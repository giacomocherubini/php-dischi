<?php include 'data.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="public/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  </head>
  <body>

    <div class="container">
      <div class="container_albums">

        <?php

        foreach ($database as $disco) { ?>

        <div class="dischi">
          <img src="<?php echo $disco['img_copertina']; ?>"></img>
          <h3><?php echo $disco['titolo']; ?></h3>
          <h3><?php echo $disco['artista']; ?></h3>
          <h3><?php echo $disco['anno']; ?></h3>
        </div>
      <?php } ?>

      </div>
    </div>

    <script src='public/js/app.js'></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  </body>
</html>
