<?php

$img=imagecreate(300,300);
$blue=imagecolorallocate($img,59,89,152);
$white=imagecolorallocate($img,255,255,255);
header("Content-type:image/gif");
imagefill($img,5,5,$blue);
imageline($img,160,62,160,300,$white);
imageline($img,205,78,205,300,$white);
imageline($img,160,299,205,299,$white);
imageline($img,120,120,250,120,$white);
imageline($img,120,161,235,161,$white);
imageline($img,120,120,120,161,$white);
imageline($img,250,120,235,161,$white);

imagefill($img,190,160,$white);
imagefill($img,140,160,$white);
imagefill($img,230,160,$white);
imagefill($img,200,260,$white);

imagearc($img,240,90,170,173,198,240,$white);
imagearc($img,293,90,180,113,175,234,$white);

imageline($img,160,62,205,78,$white);

imageline($img,198,15,242,15,$white);
imageline($img,161,60,242,60,$white);

imageline($img,242,15,242,60,$white);
imagefill($img,180,90,$white);
imagefill($img,180,40,$white);
imagefill($img,180,64,$white);
imagefill($img,225,58,$white);

imagegif($img);                //loads the image

?>
