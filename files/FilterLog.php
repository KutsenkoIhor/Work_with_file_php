<?php

$nameFileJpg = 'jpg_images.dat';
$nameFileGif = 'gif_images.dat';
$nameFilePng = 'png_images.dat';
$nameFileOpen = 'log';

$file = fopen($nameFileOpen, 'r');
while (($dataFile = fgets($file)) !== false) {
    if (stripos($dataFile, '.gif') !== false) {
        file_put_contents($nameFileGif, $dataFile, FILE_APPEND);
    } elseif (stripos($dataFile, '.jpg') !== false) {
        file_put_contents($nameFileJpg, $dataFile, FILE_APPEND);
    } elseif (stripos($dataFile, '.png') !== false) {
        file_put_contents($nameFilePng, $dataFile, FILE_APPEND);
    }
}


echo "Sorting Completed";
fclose($file);

