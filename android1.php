<?php

$img=imagecreate(300,300);
$green=imagecolorallocate($img,164,198,57);
$white=imagecolorallocate($img,255,255,255);
$cream=imagecolorallocate($img,245,255,250);
header("Content-type:image/gif");

//imagefill($img,2,2,$cream);

imageline($img,100,150,100,240,$white);
imageline($img,200,150,200,240,$white);
imageline($img,100,240,200,240,$white);
imageline($img,100,150,200,150,$white);
imageline($img,100,144,200,144,$white);
imagearc($img,150,150,100,100,180,0,$white);


imageline($img,87,180,87,210,$white);
imageline($img,95,180,95,210,$white);
imageline($img,205,180,205,210,$white);
imageline($img,213,180,213,210,$white);


imageline($img,125,240,125,265,$white);
imageline($img,133,240,133,265,$white);
imageline($img,167,240,167,265,$white);
imageline($img,175,240,175,265,$white);

imagearc($img,129,265,8,8,0,360,$white);
imagearc($img,171,265,8,8,0,360,$white);
imagearc($img,91,180,8,8,0,360,$white);
imagearc($img,91,210,8,8,0,360,$white);
imagearc($img,209,180,8,8,0,360,$white);
imagearc($img,209,210,8,8,0,360,$white);


imagearc($img,129,120,6,6,0,360,$white);
imagearc($img,171,120,6,6,0,360,$white);


imageline($img,106,73,126,106,$white);
imageline($img,200,74,176,108,$white);

imageline($img,109,73,129,106,$white);
imageline($img,197,74,173,108,$white);

imagearc($img,107.5,73,4,4,0,360,$white);
imagearc($img,198.5,74,4,4,0,360,$white);



imagefill($img,150,200,$cream);
imagefill($img,170,140,$cream);
imagefill($img,90,200,$cream);
imagefill($img,208,200,$cream);


imagefill($img,90,178,$cream);
imagefill($img,208,178,$cream);
imagefill($img,92,212,$cream);
imagefill($img,210,210,$cream);

imagefill($img,126,250,$cream);
imagefill($img,174,250,$cream);
imagefill($img,171,265,$cream);
imagefill($img,129,265,$cream);

imagefill($img,107.5,73,$cream);
imagefill($img,198.5,74,$cream);

imagefill($img,116,87,$cream);
imagefill($img,188,90,$cream);

imagegif($img);                //loads the image

?>
