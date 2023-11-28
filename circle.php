<?php

include_once("shape.php");

class Circle extends Shape {
    private $radius;

    public function __construct($r) {
        $this->radius = $r;
    }

    public function calculateArea() {
        return 3.14 * $this->radius * $this->radius;
    }
}