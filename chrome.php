<?php

$img=imagecreate(1200,1200);
$blue=imagecolorallocate($img,51,105,232);
$green=imagecolorallocate($img,0,153,57);
$red=imagecolorallocate($img,213,15,37);
$yellow=imagecolorallocate($img,238,178,17);
$white=imagecolorallocate($img,255,255,255);
header("Content-type:image/gif");
imagearc($img,510,350,160,160,0,360,$white);
imagefill($img,20,20,$white);
imagearc($img,510,350,260,263,0,360,$red);
imagearc($img,510,350,170,173,0,360,$red);
imageline($img,557,422,550,473,$red);
imageline($img,558,280,620,280,$red);
imageline($img,390,304,424,348,$red);
imagefill($img,515,350,$blue);
imagefill($img,420,320,$red);
imagefill($img,398,320,$green);
imagefill($img,610,298,$yellow);

imagegif($img);                //loads the image

?>

