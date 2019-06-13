<?php


class Customer extends DataObject{
    
    private $name;
    private $birthdate;

    public function __construct(){}

    public function getName(): string 
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function myFunction(string $test = "mystring")
    {
        $test;
    }

    public function toString()
    {
        return 'ok';
    }
}

?>