<?php

namespace Model;

class Post
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $name;

    /**
     * @return int $id
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return string $content
     */
    public function getContent() : string
    {
        return $this->content;
    }

    /**
     * @return string $name
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param int $id
     * @return Post
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $content
     * @return Post
     */
    public function setContent(string $content) : self
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @param string $name
     * @return Post
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
}