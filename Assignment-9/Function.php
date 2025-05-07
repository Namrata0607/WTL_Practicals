<?php
// Simple function
function greet() {
    echo "Hello, welcome to PHP functions!<br>";
}
greet();

// with default parameters
function greetUser($name = "Guest") {
    echo "Hello, $name!<br>";
}
greetUser("Namrata");
greetUser();

// with parameters
function add($a, $b) {
    $sum = $a + $b;
    echo "Sum of $a and $b is: $sum<br>";
}
add(5, 10);

// with return type
function factorial($n) {
    $fact = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fact *= $i;
    }
    return $fact;
}
echo "Factorial of 5 is: " . factorial(5) . "<br>";


?>