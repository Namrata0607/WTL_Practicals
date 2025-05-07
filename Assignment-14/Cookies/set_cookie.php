<?php
$cookie_name = "user";
$cookie_value = "Namrata Daphale";
setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/"); // 7 days

echo "Cookie has been set!";
?>