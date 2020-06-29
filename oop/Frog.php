<?php

require_once 'Animal.php';

class Frog extends Animal {

    // property
    public $legs = 4;

    // method
    public function jump() {
        echo 'hop hop';
    }


}


?>