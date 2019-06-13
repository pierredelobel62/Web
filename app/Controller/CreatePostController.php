<?php

namespace Controller;

use Core\Controller\ControllerInterface;
use Model\RessourceModel\Post;
use Model\Post as PostModel;
use Model\Message;
use Core\Renderer;

class CreatePostController implements ControllerInterface
{
    public function __construct(){
        $this->render = new Renderer();
    }

    public function execute()
    {
        $params = [];
        if (isset($_POST['content']) && isset($_POST['name'])) {
            if (strlen($_POST['content']) > 0 && strlen($_POST['name']) > 0) {
                $post = new PostModel;
                $post->setContent($_POST['content']);
                $post->setName($_POST['name']);
                $postRepository = new Post();
                $message = new Message();
                try {
                    $post = $postRepository->save($post);
                } catch (\Exception $e) {
                    $message->setMessage($e->getMessage());
                    $message->setCode('error');
                }
                $params = ['message' => $message];
            } else {
                $message = new Message();
                $message->setMessage('Le formulaire est vide !');
                $message->setCode('error');
                $params = ['message' => $message];
            }
        }

        echo $this->render->render('createPost.php', $params);
    }
}