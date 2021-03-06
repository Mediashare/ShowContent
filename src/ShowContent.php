<?php
namespace Mediashare\ShowContent;

use Mediashare\ShowContent\Utils\File;
use Mediashare\ShowContent\Utils\Render;

Class ShowContent {
    public $file;
    public $templates = __DIR__.'/../templates';
    public $cache = null;
    public function __construct(string $filepath) {
        $this->file = new File($filepath);
    }
    public function show() {
        $render = new Render($this->file, $this->templates, $this->cache);
        echo $render->show();
    }
}