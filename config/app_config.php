<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '110189';
$dbtbl = 'pr_list';

$con = mysqli_connect("$dbhost", "$dbuser", "$dbpass", "$dbtbl");

if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}