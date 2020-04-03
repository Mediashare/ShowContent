<?php
namespace Mediashare\ShowContent;

use Mediashare\ShowContent\Utils\File;
use Mediashare\ShowContent\Utils\Render;

Class ShowContent {
    public $file;
    public function __construct(string $filepath) {
        $this->file = new File($filepath);
    }
    public function show() {
        $render = new Render($this->file);
        echo $render->show();
    }
}