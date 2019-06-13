<?php

namespace Controller;

use Core\Controller\ControllerInterface;
use Model\RessourceModel\Post;
use Model\Post as PostModel;
use Model\Message;
use Core\Renderer;

class PostsController implements ControllerInterface
{
    public function __construct(){
        $this->render = new Renderer();
    }

    public function execute()
    {
        $post = new Post();
        $postModel = $post->getAll();
        $params = [];
        if (count($postModel) === 0) {
            $message = new Message();
            $message->setMessage('Aucun post dans la base');
            $message->setCode('notice');
            $params = ['message' => $message];
        }

        $params['post'] = $postModel;
        echo $this->render->render('posts.php', $params);
    }
}