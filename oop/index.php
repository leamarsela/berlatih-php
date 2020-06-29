<?php

// require_once 'Animal.php';
// require_once 'Frog.php';
// require_once 'Ape.php';

spl_autoload_register (function ($class_name) {
    include $class_name . '.php';
});


$sheep = new Animal('Shaun');

echo $sheep->name;
echo $sheep->legs;
echo $sheep->cold_blooded;

echo "<br>";

$sungokong = new Ape('Kera Sakti');
echo $sungokong->yell();


echo "<br>";

$kodok = new Frog('buduk');
echo $kodok->jump();

?>