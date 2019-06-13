<?php 

namespace Controller;

use Core\Controller\ControllerInterface;
use Core\Renderer;

class ContactController implements ControllerInterface
{

    private $render;

    public function __construct()
    {
        $this->render = new Renderer();
    }

    public function execute()
    {
        echo $this->render->render('contact.php', ['title' => 'tgjbrgubtr']);
    }
}
