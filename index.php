<?php
include 'vendor/autoload.php';

// Debuger
use Tracy\Debugger;
Debugger::enable();

use Mediashare\ShowContent\ShowContent;

// $file = "files/image.png";
// $file = "files/video.webm";
// $file = "files/audio.mp3";
// $file = "files/text.txt";
// $file = "files/text.md";
$file = "files/font.otf";
$showContent = new ShowContent($file);
$showContent->show();