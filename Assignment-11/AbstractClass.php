<?php
abstract class Shape {
    abstract public function area();
}

class Circle extends Shape {
    public $radius;

    function __construct($r) {
        $this->radius = $r;
    }

    public function area() {
        return 3.14 * $this->radius * $this->radius;
    }
}

$c = new Circle(5);
echo "Area of Circle: " . $c->area();
?>
