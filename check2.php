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
	$sql1= "UPDATE ticket_details SET approved = 'yes' where Roll_no = '$roll'";
	
	$sql->bind_param('ss', $no, $roll);
	
	
	$sql->execute();	
	$result = mysqli_query($conn,$sql1) or die(mysqli_error());
	if ($sql->affected_rows !=0){
		echo "<script>
		alert('Updation Sucessfull');
		window.location.href='adminnav1.php';
		</script>";

		}
		else
		{
		echo "<script>
		alert('Updation Failed..');
		window.location.href='adminnav1.php';
		</script>";

		}
		 
?>