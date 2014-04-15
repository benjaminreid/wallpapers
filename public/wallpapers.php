<?php
  $dirty_files = array('.', '..', '.DS_Store');

  $wallpapers = array();
  $directory = './wallpapers';
  $directories = scandir($directory);
  $clean_directories = array_diff($directories, $dirty_files);

  foreach($clean_directories as $dir) {
    $files = scandir($directory . '/' . $dir);
    $clean_files = array_diff($files, $dirty_files);
    $sizes = array();

    foreach ($clean_files as $file) {
      $file_name = explode('.', $file);
      $sizes[$file_name[0]] = $file;
    }

    $wallpapers[$dir] = $sizes;
  }
