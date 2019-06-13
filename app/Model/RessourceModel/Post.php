<?php

namespace Model\RessourceModel;

use Model\Post as PostModel;
use Core\Mysql;

class Post {

    public function getById($id) : PostModel
    {
        if (!is_numeric($id)) {
            throw new \Exception('Veuillez passer un int');
        }
        $result = Mysql::getConnection()->query('SELECT * FROM post WHERE id = '.$id);
        $row = $result->fetch(\PDO::FETCH_ASSOC);
        $post = new PostModel();
        if ($row) {
            $post->setId($row['id']);
            $post->setContent($row['content']);
            $post->setName($row['name']);
        } else {
            throw new \Exception('Cet id n\'est pas renseigné dans la base');
        }
        
        return $post;
    }

    public function getAll() : array
    {
        $array = [];
        $result = Mysql::getConnection()->query('SELECT * FROM post');
        $rows = $result->fetchAll(\PDO::FETCH_ASSOC);
        foreach ($rows as $row) {
            $post = new PostModel();
            $post->setId($row['id']);
            $post->setContent($row['content']);
            $post->setName($row['name']);
            $array[$post->getId()] = $post;
        }

        return $array;  
    }

    public function save(PostModel $post) : PostModel
    {
        $pdo = Mysql::getConnection();
        try {
            if ($post->getId() != null) {
                $sql = 'UPDATE post SET content = "'.$post->getContent().'" , name = "'.$post->getName().'" WHERE id = '.$post->getId().';';
            }
        } catch (\Throwable $th) {
            $nextId = 'SELECT MAX(id) FROM post';
            $nextId = ($pdo->query($nextId)->fetch())[0] + 1;
            $post->setId($nextId);
            $sql = 'INSERT INTO post VALUES ('.$nextId.', "'.$post->getContent().'" ,"'.$post->getName().'");';
        }
        $row = $pdo->query($sql);
        return $post;
    
    }
}