<?php
session_start();
define('ROOT_PATH', dirname(__DIR__) . '/');
define('PUBLIC_PATH', ROOT_PATH . 'public/');
define('APP_PATH', ROOT_PATH . 'app/');

echo "<h1 style='text-align:center; margin-top:100px;'>Welcome to Image Search App!</h1>";
echo "<p style='text-align:center;'>Database is ready. Next: Routing & Controllers!</p>";
?>