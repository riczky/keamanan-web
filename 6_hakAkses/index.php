<?php 
$mysqli = mysqli_connect("localhost", "root", "", "testing");
if (mysqli_connect_errno($mysqli)) {
	echo "failed to connect to mysql. " . mysqli_connect_error() ;
}

$id = $_GET['id'];
$sql = "SELECT * FROM artikel WHERE id='$id'";

$session_id = 1;

if ($result = $mysqli->query($sql)) {
	while($obj = mysqli_fetch_object($result)) {
	
	if ($obj->id_user == $session_id){
			echo $obj->subject;
		}else{
			echo "Tidak punya hak akses";
		}	
	}
}