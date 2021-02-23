<?php 

$mysqli = mysqli_connect("localhost", "root", "", "testing");
if (mysqli_connect_errno($mysqli)) {
	echo "Failed to connect MySql: " . mysqli_connect_error();
}

$name = "John";
$password = "Doe";


// die(hash('md5', $password));
// die(password_hash($password, PASSWORD_DEFAULT));

$hash = '$2y$10$hxkwzKkS661uW3GtQ21c9OtXhyPt/MrWiEk6eBsv0QC14M43kRzjy';
$password = password_verify($password, $hash);
// var_dump($password);

if ($password) {
	echo "Halo Selamat Datang Admin";
}

// https://crackstation.net/ 