<?php

class Animal {

    // property
    public $name;
    public $legs = 2;
    public $cold_blooded = 'false';

    // constructor
    public function __construct($name){
        $this->name = $name;
    }


}

?>