<?php
  include 'wallpapers.php';
?>
<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>wallpapers</title>
    <meta name="description" content="A site generator for easy to download wallpapers.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>

    <h1>wallpapers.</h1>

    <?php foreach($wallpapers as $wallpaper) : ?>
    <div class="wallpaper">
      <h2 class="wallpaper__title">Jurassic Park</h2>
      <div class="wallpaper__preivew wallpaper__preivew--desktop">
        <p>HD <a class="align--right" href="#">Download</a></p>
        <img class="wallpaper__image" src="wallpapers/jurassic-park/desktop.jpg" alt="">
      </div>
      <div class="wallpaper__preivew wallpaper__preivew--tablet">
        <p>Tablet <a class="align--right" href="#">Download</a></p>
        <img class="wallpaper__image" src="wallpapers/jurassic-park/tablet.jpg" alt="">
      </div>
      <div class="wallpaper__preivew wallpaper__preivew--mobile">
        <p>Mobile <a class="align--right" href="#">Download</a></p>
        <img class="wallpaper__image" src="wallpapers/jurassic-park/mobile.jpg" alt="">
      </div>
    </div>
    <?php endforeach; ?>

  </body>
</html>
