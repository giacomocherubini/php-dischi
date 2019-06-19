<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="public/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js">

    </script>
  </head>
  <body>

    <div class="container">
      <div class="container_albums">
        <?php

         ?>
      </div>
    </div>
    <!-- template handlebars -->
    <script id="entry-template" type="text/x-handlebars-template">
      <div class="entry">
        <h1>{{title}}</h1>
        <div class="body">
          {{body}}
        </div>
      </div>
    </script>
    
    <script src='public/js/app.js'></script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
  </body>
</html>
