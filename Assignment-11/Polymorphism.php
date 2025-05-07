<?php
class Animal {
    public function sound() {
        echo "Some animal sound<br>";
    }
}

class Dog extends Animal {
    public function sound() {
        echo "Dog barks<br>";
    }
}

class Cat extends Animal {
    public function sound() {
        echo "Cat meows<br>";
    }
}

$animals = [new Dog(), new Cat()];

foreach ($animals as $a) {
    $a->sound();  
}
?>