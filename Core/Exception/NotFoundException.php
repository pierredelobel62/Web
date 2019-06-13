<?php

namespace Core\Exception;

class NotFoundException
{
    public function __construct($url)
    {
        throw new \Exception($url.' not found');
    }
}