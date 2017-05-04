<?php

include 'smart_resize_image.function.php';

// $imgUrl  =  'http://localhost/prc/imageResize/Penguins.jpg';
$imgUrl  =  'http://images.nationalgeographic.com/wpf/media-live/photos/000/004/cache/big-cat-lion_462_600x450.jpg';

$ext  =  pathinfo($imgUrl, PATHINFO_EXTENSION);

// $ourImage   =  file_get_contents($imgUrl);

// echo $save       =  file_put_contents('external/image.jpg',$ourImage);
 echo $resizedFile = 'external/' . time() . '.' . $ext;

/* $resizedImage  =  smart_resize_image('external/image.jpg',null, 100,100,false,'file', false, false,100); */
$resizedImage  =  smart_resize_image(null,file_get_contents($imgUrl), 100,100,false,$resizedFile, false, false,100);
echo $resizedImage;
?>