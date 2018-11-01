<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "orc_db";
$db2="clg_db";
$roll=$_SESSION['rol'];
$date1 = date("Y/m/d");
// Create connection
#$con = mysql_connect($servername, $username, $password,$db);
#mysql_select_db("orc_db",$con);
include('server/db.php');
$con2 = mysqli_connect($servername, $username, $password,$db2);


$qry = $con->query("Select * from student_details where rollno = $roll");
$qry2 = $con2->query("Select * from student_details where rollno = $roll");
$qry3 = $con->query("Select * from ticket_details where Roll_no = $roll");

while($val=$qry->fetch_assoc() and $val2=$qry2->fetch_assoc() and $val3 = $qry3->fetch_assoc())
{
	if($val['rollno']== $val2['rollno'])
	{
		if($val['first_name']== $val2['first_name'])
		{
			if($val['middle_name']== $val2['middle_name'])
			{	
				if($val['last_name']== $val2['last_name'])
				{
						if($val['area']== $val2['area'])
						{
							if($val3['source'] == $val['area'])
							{
								$date3 = date('Y-m-d', strtotime($val3['issued_on']. ' + 20 days'));
								if($date3 <= $date1)
								{
								
										echo"<script type='text/javascript'> var uq= prompt('Validation Sucessfull! Enter Unique Number for this Application:', 'unique no.');";
										echo "window.location.href = 'check2.php?uq='+ uq </script>";
								}
								else
								{
									$str = "Updation Failed..As Souce does not matched";
									echo "<script>window.location.href = 'check3.php?uq= ".$str."'</script>";
									
								}
								
							}	
							else
							{
								$str = "Updation Failed..As Area does not matched";
								echo "<script>window.location.href = 'check3.php?uq= ".$str."'</script>";
				
							}
								
						}
						else
						{
							$str = "Updation Failed..As Last name does not matched";
							echo "<script>window.location.href = 'check3.php?uq= ".$str."'</script>";
						}
						
				}
				else
				{
					$str = "Updation Failed..As middel name does not matched";
					echo "<script>window.location.href = 'check3.php?uq= ".$str."'</script>";
				}			
		}
		else
		{
			$str = "Updation Failed..As first name does not matched";
			echo "<script>window.location.href = 'check3.php?uq= ".$str."'</script>";
		}
	}
	else
	{
		$str = "Updation Failed..As Roll_no does not matched";
		echo "<script>window.location.href = 'check3.php?uq= ".$str."'</script>";
		
	}
	
}
}
?>