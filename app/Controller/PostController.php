<?php

namespace Controller;

use Core\Controller\ControllerInterface;
use Model\RessourceModel\Post;
use Model\Post as PostModel;
use Model\Message;
use Core\Renderer;

class PostController implements ControllerInterface
{
    public function __construct(){
        $this->render = new Renderer();
    }

    public function execute()
    {
        $post = new Post();
        $params = [];
        $postModel = new PostModel();
        if (!empty($_GET['id'])) {
            try {
                $postModel = $post->getById($_GET['id']);
            } catch (\Exception $e) {
                $message = new Message();
                $message->setMessage($e->getMessage());
                $message->setCode('error');
                $params = ['message' => $message];
                $postModel = null;
            }
        } else {
            $message = new Message();
            $message->setMessage('Veuillez passer un integer dans la requête');
            $message->setCode('error');
            $params = ['message' => $message];
            $postModel = null;
        }
        $params['post'] = $postModel;
        echo $this->render->render('post.php', $params);
    }
}