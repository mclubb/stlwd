<?php
/**
 * Template Name: Image Creatation
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
$name = !empty($_GET['name']) ? $_GET['name'] : 'Mike';
$image = imagecreatetruecolor(128, 32);
$white = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $white);

imagettftext($image, 20, 0, 0, 25, 0x000000, '/usr/share/fonts/truetype/msttcorefonts/Arial.ttf', $name);

header('Content-type: image/png');
imagepng($image);
