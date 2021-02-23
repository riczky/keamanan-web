<?php 

session_start();
// $_SESSION['token'] = base64_encode( openssl_random_pseudo_bytes(32));
// die($token);
if (!isset($_SESSION['token'])) {
	$_SESSION['token'] = base64_encode( openssl_random_pseudo_bytes(32));
}

	if ( !empty($_GET['submit']) && $_SESSION['token'] == $_GET['token_form']) {
		// die($_SESSION['token'] . ' = ' . $_GET['token_form']);
		session_destroy();
		die('user terhapus!');
	}

 ?>

 <form action="" method="get">
 	<input type="text" name="data" value="">
 	<input type="hidden" name="token_form" value="<?=$_SESSION['token'] ?>"> 
 	<input type="submit" name="submit" value="okay">
 </form>

