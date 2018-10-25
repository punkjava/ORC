<?php
session_start();
include('db.php');
$roll=$_SESSION['rol'];
$var="yes";
	$no = $_GET['uq'];
	$conn = new mysqli($servername, $username, $password,$db);
	
	$sql= $conn->prepare("UPDATE ticket_details SET unique_no = ? where Roll_no = ?");	
	$sql1= "UPDATE ticket_details SET approved = 'no' where Roll_no = '$roll'";
	
	$sql->bind_param('ss', $no, $roll);
	
	
	$sql->execute();	
	$result = mysqli_query($conn,$sql1) or die(mysqli_error());
	
	if ($sql->affected_rows !=0 or $result->affected_rows !=0){
		echo "<script>
		alert('".$no."');
		window.location.href='http://127.0.0.1:8800/orc/cstble.php';
		</script>";

		}
		else
		{
		echo "<script>
		alert('Updation Failed..');
		window.location.href='http://127.0.0.1:8800/orc/cstble.php';
		</script>";

		}
		 
?>