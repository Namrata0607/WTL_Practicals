<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $c = $_POST['num3'];
    $num = $_POST['factNum'];
    $marks = $_POST['marks'];

    // Addition
    echo "<h3>Addition</h3>";
    echo "Sum of $a, $b and $c = " . ($a + $b + $c) . "<br>";

    // Factorial
    echo "<h3>Factorial</h3>";
    $fact = 1;
    for ($i = 1; $i <= $num; $i++) {
        $fact *= $i;
    }
    echo "Factorial of $num = $fact<br>";

    // Greatest Number
    echo "<h3>Greatest Number</h3>";
    $greatest = ($a > $b && $a > $c) ? $a : (($b > $c) ? $b : $c);
    echo "Greatest among $a, $b and $c = $greatest<br>";

    // Grade (Conditional)
    echo "<h3>Grade</h3>";
    if ($marks >= 90) {
        echo "Grade: A+";
    } elseif ($marks >= 75) {
        echo "Grade: A";
    } elseif ($marks >= 60) {
        echo "Grade: B";
    } else {
        echo "Grade: C";
    }
} else {
    echo "Invalid Access";
}
?>
