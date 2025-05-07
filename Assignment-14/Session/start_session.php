<?php
session_start();

$_SESSION["username"] = "Namrata";
$_SESSION["email"] = "namrata@example.com";

echo "Session started and data stored.";
?>
