<?php

require __DIR__ . "/vendor/autoload.php";

use App\LSP\Poligon;
use App\LSP\Rectangle;
use App\LSP\Square;

/*$rectangle = new Rectangle(10, 5);
echo "Área do retângulo: {$rectangle->getArea()}";

echo "<hr/>";

$square = new Square(5);
echo "Área do quadrado: {$square->getArea()}";*/

$rectangle = new Rectangle(10,5);
$poligon = new Poligon($rectangle);
echo "Área do retângulo: {$poligon->getArea()}";

echo "<hr/>";

$square = new Square(10,5);
$poligon = new Poligon($square);
echo "Área do quadrado: {$poligon->getArea()}";