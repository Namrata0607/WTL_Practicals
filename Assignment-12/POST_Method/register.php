<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetching form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];

    echo "<h2>Registration Successful!</h2>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Password: $password <br>";
    echo "Age: $age <br>";
} else {
    echo "Invalid request!";
}
?>
