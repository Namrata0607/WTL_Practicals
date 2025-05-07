<?php
    // Addition
    echo "Addition<br>";
    $a = 5; 
    $b = 10; 
    $c = 15;
    echo "Sum: " . ($a + $b + $c) . "<br>";

    // Factorial
    echo "<br>Factorial<br>";
    $num = 5;
    $fact = 1;
    for ($i = 1; $i <= $num; $i++) {
        $fact *= $i;
    }
    echo "Factorial of $num is $fact<br>";

    // Greatest Number
    echo "<br>Greatest Number<br>";
    $x = 30; $y = 50; $z = 20;
    $greatest = ($x > $y && $x > $z) ? $x : (($y > $z) ? $y : $z);
    echo "Greatest: $greatest<br>";

    // Conditional
    echo "<br>If else<br>";
    $marks = 75;
    if ($marks >= 90) {
        echo "Grade: A+";
    } elseif ($marks >= 75) {
        echo "Grade: A";
    } else {
        echo "Grade: B";
    }

    //switch case
    echo "<br><br>Switch Case<br>";
    $day = 3;
    switch ($day) {
        case 1:
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "Wednesday";
            break;
        case 4:
            echo "Thursday";
            break;
        case 5:
            echo "Friday";
            break;
        case 6:
            echo "Saturday";
            break;
        case 7:
            echo "Sunday";
            break;
        default:
            echo "Invalid day";
    }

    //for loop
    echo "<br><br>For Loop<br>";
    for ($i = 1; $i <= 5; $i++) {
        echo "Number: $i<br>";
    }

    //while loop
    echo "<br>While Loop<br>";
    $i = 1;
    while ($i <= 5) {
        echo "Number: $i<br>";
        $i++;
    }

    //do while loop
    echo "<br>Do While Loop<br>";
    $i = 1;
    do {
        echo "Number: $i<br>";
        $i++;
    } while ($i <= 5);
?>
