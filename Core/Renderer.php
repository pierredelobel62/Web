<?php

namespace Core;

class Renderer
{

    private $render;
    private $params;

    public function render(string $file, $params = [])
    {
        $file = ROOT.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'View'.DIRECTORY_SEPARATOR.$file;
        if (!file_exists($file)) {
            throw new \Exception('Template not exist');
        }
        $this->params = $params;
        $this->render = $file;
        ob_start();
        $header = include ROOT.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'View'.DIRECTORY_SEPARATOR.'header.php';
        $body = include $file;
        $footer = include ROOT.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'View'.DIRECTORY_SEPARATOR.'footer.php';
        $content = ob_get_clean();
        return $content;
    }

}