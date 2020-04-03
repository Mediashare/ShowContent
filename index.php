<?php
include 'vendor/autoload.php';

// Debuger
use Tracy\Debugger;
Debugger::enable();

use Mediashare\ShowContent\ShowContent;

$file = "files/image.png";
$showContent = new ShowContent($file);
$showContent->show();
$file = "files/video.webm";
$showContent = new ShowContent($file);
$showContent->show();
$file = "files/audio.mp3";
$showContent = new ShowContent($file);
$showContent->show();
$file = "files/text.txt";
$showContent = new ShowContent($file);
$showContent->show();
$file = "files/text.md";
$showContent = new ShowContent($file);
$showContent->show();