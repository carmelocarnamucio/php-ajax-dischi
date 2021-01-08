<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CD PHP</title>
    <?php
       require_once "data.php";
     ?>
  </head>
  <body>

    <header class='app-header'>
      <img src="img/logo.png" alt="logo">
    </header>

    <div id="app">
      <?php
        foreach ($database as $value) {
          ?>
          <ul class='cds-list'>
            <li class='cd'>
              <div class='wrap-image'>
                <img src="<?php echo $value["poster"] ?>" alt="">
              </div>
              <h3 class="title"><?php echo $value["title"] ?> </h3>
              <div class="author"><?php echo $value["author"] ?> </div>
              <div class="year"><?php echo $value["year"] ?> </div>
            </li>
          </ul>
          <?php
        }
      ?>
    </div>

  </body>
</html>
