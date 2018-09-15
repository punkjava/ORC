<?php
session_start();
if (isset($_POST['submit'])) {
	include 'db.php';
	$username = $con->real_escape_string($_POST['uname']);
	$password = $con->real_escape_string($_POST['psw']);

	$sql = $con->query("Select * from admin where roll_no='$username' AND 
						password='$password' AND status=1");
	if($sql->num_rows>0){
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	header('location:../home.php');
}
	
else
{
	/*header('location:../index.html');*/
	echo "username or password is invalid or verify your email";
	 
}
}
?>