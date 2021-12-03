# ShowContent
Detect file type & generate html view for web interface user-friendly.
## File Types Supported
- Image
- Video
- Audio
- Text
- Markdown
## Installation
```bash
composer require mediashare/show-content
```
## Usages
```php
<?php
include 'vendor/autoload.php';
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
```
