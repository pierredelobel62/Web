<?php

namespace Model;

class Message
{
    private $message;
    private $code;

    public function getMessage() : string
    {
        return $this->message;
    }

    public function getCode() : string
    {
        return $this->code;
    }

    public function setMessage(string $message) : Message
    {
        $this->message = $message;
        return $this;
    }

    public function setCode(string $code) : Message
    {
        $this->code = $code;
        return $this;
    }
}