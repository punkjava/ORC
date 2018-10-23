<html>
<head></head>
<style type="text/css">
.mar
 {
 	width: 812px;
    padding: 50px;
	margin:50px;
   

 }
table
{
	border-collapse: collapse;
	width: 800px;
	font-size: 22px;
	background-color: #f2f2f2;
}

	
td {
    padding-top: .8em;
	padding-left: 30px;
    padding-bottom:.8em;
    border-bottom: 1px solid #ddd;
	align:center;
}
.but{
   
	width: 100px;
    padding: 10px;
    border: 5px solid #4CAF50;
    margin: 10px;
    text-align: center;
    background-color: #4CAF50; 
     

    }

</style>


<body>

<?php 
session_start();
include("server/db.php");
if(isset($_GET["rol"])){
$rol = $_GET["rol"];

$sql = "SELECT * FROM student_details  inner join ticket_details on student_details.rollno=ticket_details.Roll_no where student_details.rollno=$rol" ;
$result = $con->query($sql);
echo"<div class=\"mar\">";
if ($result->num_rows > 0) {
  echo "<br><br><br><table >
    <tr>
    <th></th>
    <th></th>
    </tr>";
		
    while($row = $result->fetch_assoc()) {
    	
        echo "<tr><td>Roll no:</td><td>" . $row["rollno"]. "</td></tr>";
	echo "<tr><td> First Name:</td><td>" . $row["first_name"].  "</td></tr>" ;
	echo"<tr><td> Middle Name:</td><td>". $row["middle_name"]. "</td></tr>"; 
	echo"<tr><td>Last Name:</td><td>" . $row["last_name"]. "</td></tr>"; 
	echo "<tr><td>Date Of birth:</td><td>" . $row["DOB"]. "</td></tr>";
	echo "<tr><td>Course:</td><td>" . $row["course"]. "</td></tr>";
	echo "<tr><td>Flat no:</td><td>" . $row["flat_no"]."</td></tr>";
	echo"<tr><td>Area:</td><td>"  .$row["area"]. "</td></tr>";
	echo "<tr><td>Society:</td><td>" . $row["society"]."</td></tr>";
	echo" <tr><td>Pincode:</td><td>" . $row["pin_code"]. "</td></tr>";
	echo "<tr><td>Current Ticket No:</td><td>" . $row["current_Tic_no"]."</td></tr>";
	echo "<tr><td>Duration:</td><td>" . $row["duration"]. "</td></tr>";
	echo "<tr><td>Source:</td><td>" . $row["source"]. "</td></tr>";
	echo "<tr><td>Date Of Application:</td><td>" . $row["date_of_app"]."</td></tr>";
	echo "<tr><td>Line:</td><td>" . $row["line"]. "</td></tr>";
	echo "<tr><td>Class:</td><td>" . $row["class"]. "</td></tr>";
	echo "<tr><td>Previous Certificate Number:</td><td>" . $row["pre_certi_no"]. "</td></tr>";
	echo "<tr><td>Issued On:</td><td>" . $row["issued_on"]. "</td></tr>";
	echo "<tr><td>Previous Pass Expire Date:</td><td>" . $row["expire_date_previous"]. "</td></tr>";
	
   }
	
     
  echo "</table>";

  echo"<div class=\"but\">";
	$_SESSION['rol']=$rol;
   echo"<a href="server/check.php">VALIDATE</a>";
   
} 
else {
    echo "0 results";

$con->close();
echo("</div>");
}
}
?>

</body>
</html>