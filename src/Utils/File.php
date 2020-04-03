<?php
namespace Mediashare\ShowContent\Utils;

Class File {
    public $path;
    public $content;
    public $mimeType;
    public $type;
    public $extension;
    public function __construct(string $filepath) {
        $this->path = $filepath;
    }
    public function getContent() {
        $this->content = file_get_contents($this->path);
        return $this->content;
    }
    public function getMimeType() {
        $this->mimeType = mime_content_type($this->path);
        return $this->mimeType;
    }
    public function getType() {
        $mimeType = $this->getMimeType();
        if (strpos($mimeType, 'image/') !== false):
            $this->type = 'image';
        elseif (strpos($mimeType, 'video/') !== false):
            $this->type = 'video';
        elseif (strpos($mimeType, 'font/') !== false || $this->getExtension() === 'otf' || $mimeType === 'application/vnd.ms-opentype'):
            $this->type = 'font';
        elseif (strpos($mimeType, 'application/') !== false):
            $this->type = 'application';
        elseif (strpos($mimeType, 'text/') !== false):
            $this->type = 'text';
        elseif (strpos($mimeType, 'audio/') !== false):
            $this->type = 'audio';
        endif;
        return $this->type;
    }
    public function getExtension() {
        $this->extension = pathinfo($this->path)['extension'];
        return $this->extension;
    }
}