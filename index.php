<?php

ini_set('display_errors', 'on');

// La fonction callback prend un paramètre (dont le nom est arbitraire) 
// et représente le nom de la classe que l'on a essayé de charger
// La fonction callback est appelée à chaque fois que l'on essaie d'instancier une classe
spl_autoload_register(function ($className) {
    require "classes/$className.php";
    
    
    // Version concaténation
    // require 'classes/' . $className . '.php';
});

$rectangle = new Rectangle(100, 100, 'limegreen', 0.8, 200, 150);
$ellipse = new Ellipse(100, 100, 100, 100, '#FF1521', 0.8);
$triangle = new Triangle(200, 50, 100, 300, 300, 200, 'black', 1.2);

$container = new ShapeContainer(800, 600);
$container
    ->addShape($rectangle)
    ->addShape($triangle)
    ->addShape($ellipse);




require 'index.phtml';