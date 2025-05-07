<?php
class Student {
    public $name, $age, $marks;

    function __construct($name, $age, $marks) {
        $this->name = $name;
        $this->age = $age;
        $this->marks = $marks;
    }

    function getCGPA() {
        return $this->marks / 10;
    }

    function display() {
        echo "Name: $this->name<br>";
        echo "Age: $this->age<br>";
        echo "Marks: $this->marks<br>";
        echo "CGPA: " . $this->getCGPA() . "<br>";
    }
}

$stud = new Student("Namrata", 21, 88);
$stud->display();
?>
