<?php
namespace Mediashare\ShowContent\Utils;

use Parsedown;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Mediashare\ShowContent\Utils\File;

/**
 * Render
 * @return Twig return HTML with file content.
 */
Class Render {
    private $file;
    private $twig;
    public function __construct(File $file) {
        $this->file = $file;
        $loader = new \Twig\Loader\FilesystemLoader('templates');
        $this->twig = new \Twig\Environment($loader, [
            // 'cache' => 'var/cache',
            'debug' => true
        ]);
    }

    public function show() { 
        if ($this->file->getType() === 'image'):
            return $this->image();
        elseif ($this->file->getType() === 'video'):
            return $this->video();
        elseif ($this->file->getType() === 'application'):
            return $this->application();
        elseif ($this->file->getType() === 'text'):
            return $this->text();
        elseif ($this->file->getType() === 'audio'):
            return $this->audio();
        elseif ($this->file->getType() === 'font'):
            return $this->font();
        endif;
    }

    private function image(): string {
        $template = $this->twig->load('image.html.twig');
        return $template->render(
            ['file' => $this->file]
        );
    }
    private function video() {
        $template = $this->twig->load('video.html.twig');
        return $template->render(
            ['file' => $this->file]
        );
    }
    private function text() {
        if ($this->file->getMimeType() === 'text/markdown' || $this->file->getExtension() === 'md'):
            $template = $this->twig->load('markdown.html.twig');
            $markdown = new Parsedown();
            $this->file->content = $markdown->text($this->file->getContent());
        else:
            $template = $this->twig->load('text.html.twig');
            $this->file->content = preg_replace("/\r\n|\r|\n/", '<br/>', $this->file->getContent());
        endif;
        return $template->render(
            ['file' => $this->file]
        );
    }
    private function audio() {
        $template = $this->twig->load('audio.html.twig');
        return $template->render(
            ['file' => $this->file]
        );
    }
    private function font() {
        return $this->error('Font file is not supported. [Path: '.$this->file->path.' | MimeType: '.$this->file->getMimeType().']');
    }
    private function application() {
        return $this->error('Application file is not supported. [Path: '.$this->file->path.' | MimeType: '.$this->file->getMimeType().']');
    }
    private function error(string $message) {
        $template = $this->twig->load('error.html.twig');
        return $template->render(
            ['error' => $message]
        );
    }
}