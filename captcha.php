<?php
session_start();
$image = imagecreate($img_width, $img_height); // create background image with dimensions
imagecolorallocate($image, 255, 255, 255); 
$text_color = imagecolorallocate($image, 0, 0, 0); // set captcha text color
imagettftext($image, $font_size, 0, 15, 30, $text_color, 'font.ttf', $captcha_num);
imagejpeg($image);



?>