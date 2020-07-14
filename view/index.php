<?php

//include '../app/Bangla/Video.php';
//include '../app/English/Video.php';

include '../vendor/autoload.php';

use E_SHOP\Bangla\Video as BanglaVideo;
use E_SHOP\Bangla\Audio;
use E_SHOP\English\Video as EnglishVideo;
use E_SHOP\Bangla\NewDir\Test;

$englishVideo = new EnglishVideo();

$banglaVideo = new BanglaVideo();

$banglaAudio = new Audio();

$test = new Test();