<?php

$name = "localhost";
$unmae = "root";
$password = "";

$db_name = "test_db";

$conn = mysqli_connect($uname, $unmae, $password, $db_name);

if(!$conn) {
echo "Connection Failed";
}
 ?>
