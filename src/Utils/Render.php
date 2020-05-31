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
    public function __construct(File $file, string $templates, ?string $cache = null) {
        $this->file = $file;
        $loader = new \Twig\Loader\FilesystemLoader($templates);
        if ($cache):
            $options = ['cache' => $cache,];
        endif;
        $this->twig = new \Twig\Environment($loader, $options ?? []);
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
        $template = $this->twig->load('_image.html.twig');
        return $template->render(
            ['file' => $this->file]
        );
    }
    private function video() {
        $template = $this->twig->load('_video.html.twig');
        return $template->render(
            ['file' => $this->file]
        );
    }
    private function text() {
        if ($this->file->getMimeType() === 'text/markdown' || $this->file->getExtension() === 'md'):
            $markdown = new Parsedown();
            $this->file->content = $markdown->text($this->file->getContent());
            $template = $this->twig->load('_markdown.html.twig');
            return $template->render([
                'file' => $this->file,
                'css' => [
                    \file_get_contents(__DIR__."/../../assets/css/markdown.css"),
                    \file_get_contents(__DIR__."/../../assets/css/prism.css")
                ],
                'javascripts' => [
                    \file_get_contents(__DIR__."/../../assets/js/prism.js")
                ]
            ]);
        elseif ($this->file->getMimeType() !== 'text/plain' && $this->file->getExtension() !== '.txt'):
            $this->file->content = $this->file->getContent();
            $template = $this->twig->load('_code.html.twig');
            return $template->render([
                'file' => $this->file,
                'css' => [
                    \file_get_contents(__DIR__."/../../assets/codemirror/lib/codemirror.css"),
                ],
                'javascripts' => [
                    \file_get_contents(__DIR__."/../../assets/codemirror/lib/codemirror.js"),
                ]
            ]);
        else:
            $this->file->content = $this->file->getContent();
            $template = $this->twig->load('_text.html.twig');
            return $template->render([
                'file' => $this->file,
                'css' => [
                    \file_get_contents(__DIR__."/../../assets/css/markdown.css"),
                    \file_get_contents(__DIR__."/../../assets/css/prism.css")
                ],
                'javascripts' => [
                    \file_get_contents(__DIR__."/../../assets/js/prism.js")
                ]
            ]);
        endif;
    }
    private function audio() {
        $template = $this->twig->load('_audio.html.twig');
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
        $template = $this->twig->load('_error.html.twig');
        return $template->render(
            ['error' => $message]
        );
    }
}