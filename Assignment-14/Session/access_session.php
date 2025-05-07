<?php
session_start();

if (isset($_SESSION["username"])) {
    echo "Username: " . $_SESSION["username"] . "<br>";
    echo "Email: " . $_SESSION["email"];
} else {
    echo "Session not started!";
}
?>
