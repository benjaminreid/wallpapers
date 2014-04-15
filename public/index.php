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

    <?php foreach($wallpapers as $wallpaper => $files) : ?>
    <div class="wallpaper">
      <h2 class="wallpaper__title"><?php echo $wallpaper ?></h2>
      <?php foreach($files as $type => $file) : ?>
      <div class="wallpaper__preivew wallpaper__preivew--<?php echo $type ?>">
        <p class="wallpaper__meta"><?php echo $type ?> <a class="align--right" href="wallpapers/<?php echo $wallpaper ?>/<?php echo $file ?>">Download</a></p>
        <img class="wallpaper__image" src="wallpapers/<?php echo $wallpaper ?>/<?php echo $file ?>" alt="">
      </div>
      <?php endforeach; ?>
    </div>
    <?php endforeach; ?>

  </body>
</html>
