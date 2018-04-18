<?php

$path = $argv[1];
$r = $argv[2];
$g = $argv[3];
$b = $argv[4];

$resource = imagecreatefrompng($path);
$width    = imagesx($resource);
$height   = imagesy($resource);

$count = 0;

for ($x = 0; $x < $width; $x++) {
  for ($y = 0; $y < $height; $y++) {
    $rgb = imagecolorat($resource, $x, $y);

    $r2 = ($rgb >> 16) & 0xFF;
    $g2 = ($rgb >> 8) & 0xFF;
    $b2 = $rgb & 0xFF;

    if ($r == $r2 && $g == $g2 && $b == $b2)
      $count++;
  }
}

echo $count;

echo "\n";
