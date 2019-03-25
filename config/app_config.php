<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '110189';
$dbname = 'pr_list';
$dbtble = 'products';

$con = mysqli_connect("$dbhost", "$dbuser", "$dbpass", "$dbname");

if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// $dbhost = '127.0.0.1:3306';
// $dbuser = 'u652637700_root';
// $dbpass = 'whoolois1428';
// $dbname = 'u652637700_dbtbl';
// $dbtble = 'products';