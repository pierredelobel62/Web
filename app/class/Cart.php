<?php

class Cart extends DataObject
{
    public function __construct()
    {
        echo 'je suis load '. __CLASS__;
    }

    public function toString()
    {
        return 'ok';
    }
}

?>