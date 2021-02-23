<?php 

$mysqli = mysqli_connect("localhost", "root", "", "testing");
if (mysqli_connect_errno($mysqli)) {
	echo "Failed to connect MySql: " . mysqli_connect_error();
}

$name = "John";
// $password = "Doe";
$password = " 1' OR '1'='1 ";

$name = $mysqli->real_escape_string($name);
$password = $mysqli->real_escape_string($password);

$sql = "SELECT * FROM user WHERE name='$name' AND password='$password'";

die($sql);
if ($result = $mysqli->query($sql)) {
	print_r( $result->fetch_object());
}




