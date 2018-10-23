<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "orc_db";
$roll=$_SESSION['rol'];
	$no = $_GET['uq'];
	$conn = new mysqli($servername, $username, $password,$db);
	$sql= $conn->prepare("UPDATE ticket_details SET unique_no = ? where Roll_no = ?");	
	$sql->bind_param('ss', $no, $roll);
	$sql->execute();
	if ($sql->affected_rows !=0){
		echo "<script>
		alert('Updation Sucessfull');
		window.location.href='http://localhost/ORC/cstble.php';
		</script>";

		}
		else
		{
		echo "<script>
		alert('Updation Failed..');
		window.location.href='http://localhost/ORC/cstble.php';
		</script>";

		}
		 
?>