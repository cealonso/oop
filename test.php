<?php
include_once("circle.php");
include_once("shape.php");
include_once("square.php");

$newShape=new Shape();
echo $newShape->calculateArea();
echo "<br>";

$newSquare=new Square(30);
echo $newSquare->calculateArea();
echo "<br>";

$newCircle=new Circle(20);
echo $newCircle->calculateArea();

