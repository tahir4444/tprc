<?php

include 'smart_resize_image.function.php';

$timestamp  =  time();

$imgUrl     =  'http://localhost/prc/imageResize/Penguins.jpg';
// $imgUrl  =  'http://images.nationalgeographic.com/wpf/media-live/photos/000/004/cache/big-cat-lion_462_600x450.jpg';

//set external image to a string;
$fileString =  file_get_contents($imgUrl);

//getting the extention on the image;

$height      =  '100';
$width       =  '100';

//getting file extention
$fileExt    =  pathinfo($imgUrl, PATHINFO_EXTENSION);

//setting new names
$origName    =  $timestamp . '_original.' . $fileExt;
$newName     =  $timestamp . '_' . $width . 'x' . $height . '.' . $fileExt;

//save image to local
$saveLocal  =  file_put_contents('external/' . $origName, $fileString);

// $ourImage   =  file_get_contents($imgUrl);

// echo $save       =  file_put_contents('external/image.jpg',$ourImage);
$resizedFile = 'resized/' . $newName;

/* $resizedImage  =  smart_resize_image('external/image.jpg',null, 100,100,false,'file', false, false,100); */
$resizedImage  =  smart_resize_image(null,file_get_contents($imgUrl), $width,$height,false,$resizedFile, false, false,100);
echo $resizedImage;
?>