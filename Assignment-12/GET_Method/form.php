<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET['name'];
    $age = $_GET['age'];

    echo "<h2>Received Data:</h2>";
    echo "Name: $name <br>";
    echo "Age: $age <br>";
} else {
    echo "Invalid request method!";
}
?>
