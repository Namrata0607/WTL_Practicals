<?php
interface Person {
    public function introduce();
}

class Student implements Person {
    public function introduce() {
        echo "Hello, I am Namrata.";
    }
}

$student = new Student();
$student->introduce();
?>
