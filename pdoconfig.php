<?php
// $host = "localhost";
// $dbname = "netmattersdb";
// $username = "root";
// $password = "pass1";
include 'envloader.php';
$host = $_ENV['MySQL_DB_HOST'];
$dbname = $_ENV['MySQL_DB_NAME'];
$username = $_ENV['MySQL_DB_USER_NAME'];
$password = $_ENV['MySQL_DB_PASSWORD'];
?>