<?php 
session_start();
if(!isset($_SESSION['username'])){
  header("Location:index.html");
}
$roll_nos=$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<title>Student_history</title>
<link rel="stylesheet" type="text/css" href="css/table.css">
<link rel="stylesheet" type="text/css" href="css/main_page.css">
<!--link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<style>
#arr{

float: center-right-bottom;
position: fixed:
padding-top:15%;
padding-left: 15%;
}
table{
    position: fixed;
   margin-top: 20%;
   margin-left: 18%;
   overflow-y: scroll;
}
</style>

	</head>
	<body>
	<!--header-->
  	<header class="header">
    <div class="logo">
    <img src="img/fcritlogo.png"> 
    

        <div id="address">
        <p><h1> AGNEL CHARITIES'</h1> </p>
        <p>  FR. C. RODRIGUES INSTITUTE OF TECHNOLOGY</p>
        <p style="word-spacing: 2px;"> Agnel Technical Education Complex 
                        Sector 9-A, Vashi, Navi Mumbai,
                        Maharashtra, India 
                        PIN - 400703 </p>
        </div>
    </div>
  </header>

<ul>
  <li><a  href="home.php">Form</a></li>
  <li><a class="active" href="student_history.php">History</a></li>
  <li><a  href="status.php">Status</a></li>
  <li><a href="demo.html">Notice</a></li>
 <li><a href="server/logout.php">Logout</a></li>
</ul>
<div id="arr" >
    
</div>
<?php 
include("server/db.php");

$sql = "SELECT App_id,source,date_of_app,line,class,pre_certi_no,expire_date_previous FROM student_details inner join ticket_details on student_details.rollno=ticket_details.Roll_no where student_details.rollno=$roll_nos";
$result = $con->query($sql);

if ($result->num_rows > 0) 
{

    echo "<table>
    <tr>
    <th>APPLICATION ID</th>
    <th>SOURCE</th>
    <th>APPLICATION DATE</th>
    <th>ROUTE</th>
    <th>CLASS</th>
    <th>P.CERTI.NO</th>
        </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["App_id"]."</td>";
        echo "<td>".$row["source"]."</td>";
        echo "<td>".$row["date_of_app"]."</td>";
        echo "<td>".$row["line"]."</td>";
        echo "<td>".$row["class"]."</td>";
        echo "<td>".$row["pre_certi_no"]."</td>";
   
    }    echo "</table>";
}
 else {
    echo "0 results";
}

?>



	</body>
</html>