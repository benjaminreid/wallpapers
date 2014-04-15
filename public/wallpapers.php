<?php
  $dirty_files = array('.', '..', '.DS_Store');

  $wallpapers = array();
  $directory = './wallpapers';
  $directories = scandir($directory);
  $clean_directories = array_diff($directories, $dirty_files);

  foreach($clean_directories as $dir) {
    $files = scandir($directory . '/' . $dir);
    $clean_files = array_diff($files, $dirty_files);

    $wallpapers[$dir] = $clean_files;
  }
