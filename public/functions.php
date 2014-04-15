<?php
  $wallpapers = array();
  $directory = './wallpapers';
  $directories = scandir($directory);
  $clean_directories = array_diff($directories, array('.', '..'));

  foreach($clean_directories as $dir) {
    $files = scandir($directory . '/' . $dir);
    $clean_files = array_diff($files, array('.', '..'));

    $wallpapers[$dir] = $clean_files;
  }
