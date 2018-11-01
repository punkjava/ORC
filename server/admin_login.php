<?php
session_start();
if (isset($_POST['submit'])) {
	require 'db.php';
	$username = $con->real_escape_string($_POST['uname']);
	$password = $con->real_escape_string($_POST['psw']);

	/*$sql = $con->query("Select * from admin where roll_no='$username' AND 
						password='$password' AND status=1");
	if($sql->num_rows>0){
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	header('location:../home.php');
}*/
$query = "SELECT * FROM admine_details WHERE Admin_id='$username'
and password='$password' ";

	$result = mysqli_query($con,$query) or die(mysqli_error());
	$rows = mysqli_num_rows($result);

        if($rows==1){
	    $_SESSION['username'] = $username;
	    $_SESSION['password']=$password;
           
	    header("Location: ../adminnav1.php");
	}	
else
{
	echo "<script>
	alert('username or password is invalid');
	window.location.href='../index.html';
	</script>
	";
	 
}
}
?>