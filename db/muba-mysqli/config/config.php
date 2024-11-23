<?php

// development
$base_url = "http://localhost/php-basic/db/muba-mysqli";
// $hostname = "localhost";
// $username = "root";
// $password = "";
// $database = "db_muba_mysqli";

// production
$hostname = "localhost";
$username = "tami8172_admin";
$password = "tami8172_admin";
$database = "tami8172_db_muba_mysqli";


$db = mysqli_connect($hostname, $username, $password, $database);

// if (!$db) {
//     die("Connection failed: " . mysqli_connect_error());
// } else {
//     echo "Connected successfully";
// }
