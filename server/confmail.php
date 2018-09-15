<?php

	function redirect(){
		header('location: index.html');
	}

if (!isset($_GET['email']) || !isset($_GET['token'])) {
	redirect();
	exit();
}else{
	include 'db.php';
	$email = $con->real_escape_string($_GET['email']);
	$token = $con->real_escape_string($_GET['token']);

	$sql = $con->query()
}

?>