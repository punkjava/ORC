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
$con = mysql_connect($servername, $username, $password,$db);
mysql_select_db("orc_db",$con);

$con2 = mysql_connect($servername, $username, $password,$db);
mysql_select_db("clg_db",$con2);


$qry = mysql_query("Select * from student_details where rollno = $roll",$con);
$qry2 = mysql_query("Select * from student_details where rollno = $roll",$con2);
$qry3 = mysql_query("Select * from ticket_details where Roll_no = $roll",$con);

while($val=mysql_fetch_assoc($qry) and $val2=mysql_fetch_assoc($qry2) and $val3 = mysql_fetch_assoc($qry3))
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
										echo "window.location.href = 'http://localhost/ORC/server/check2.php?uq='+ uq </script>";
								}
								else
								{
									echo "<script>
									alert('Updation Failed..As Souce does not matched');
									window.location.href='http://localhost/ORC/cstble.php';
									</script>";
								}
								
							}	
							else
							{
								echo "<script>
								alert('Updation Failed..As Area does not matched');
								window.location.href='http://localhost/ORC/cstble.php';
								</script>";
							}
								
						}
						else
						{
							echo "<script>
							alert('Updation Failed..Area does not matched');
							window.location.href='http://localhost/ORC/cstble.php';
							</script>";
						}
						
				}
				else
				{
					echo "<script>
					alert('Updation Failed..As last name does not matched');
					window.location.href='http://localhost/ORC/cstble.php';
					</script>";

				}			
		}
		else
		{
			echo "<script>
			alert('Updation Failed..As middle name does not matched');
			window.location.href='http://localhost/ORC/cstble.php';
			</script>";

		}
	}
	else
	{
		echo "<script>
		alert('Updation Failed..As first name doe not matched');
		window.location.href='http://localhost/ORC/cstble.php';
		</script>";

	}
	
}
}
?>