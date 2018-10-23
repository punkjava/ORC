<html>
	<head><title>Student</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<style>
    table {
    width: 80%;
}

th {
    height: 40px;
    text-align: left;
    background-color:#4CAF50;
    color: white;
    border: 1px solid #ddd;
    
}
td {
    height: 35px;

    border: 1px solid #ddd;
    
}

		  .header{
      background-color:#4CAF50;
      height: 28%;
      width: 100%;

    color: white;
    }
logo{
    margin-left: 5%;
  }
     #address {
      left: 0;
     
    }

#history {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#history td, #history th {
    border: 1px solid #ddd;
    padding: 5px;
}

#history tr:nth-child(even){background-color: #f2f2f2;}

#history tr:hover {background-color: #ddd;}

#history th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
}
	</style>
	</head>
	<body>
	<!--header-->
  	<header class="header">
 	   <div class="logo">
  	  <img src="img/fcritlogo.png" style="float: left;padding-right: 20px;"> </div>
    
    <!--p style="display: float;">hello</p-->
    <div id="address">
    <p><h1> AGNEL CHARITIES'</h1> </p>
    <p>  FR. C. RODRIGUES INSTITUTE OF TECHNOLOGY</p>
    <p style="word-spacing: 2px;"> Agnel Technical Education Complex 
                        Sector 9-A, Vashi, Navi Mumbai,
                        Maharashtra, India 
                        PIN - 400703 </p>
    </div>
  </header>
<br> <br>

<?php 
session_start();
include("db.php");


$sql = "SELECT App_id,Roll_no,gender,dob,course,source,date_of_app,line,class,pre_certi_no,issued_on,unique_no,expire_date_previous FROM student_details
 inner join ticket_details on student_details.rollno=ticket_details.Roll_no";

$result = $con->query($sql);

if ($result->num_rows > 0) 
{
    echo "<table>
    <tr>
    <th>APPLICATION ID</th>
    <th>ROLL NO</th>
    <th>GENDER</th>
    <th>D.O.B</th>
    <th>COURSE</th>
    <th>SOURCE</th>
    <th>D.O.APP</th>
    <th>ROUTE</th>
    <th>CLASS</th>
    <th>P.CERTI.NO</th>
    <th>ISSUED ON</th>
    <th>UNIQUE NO</th>
    <th>EXPIRY DATE</th>
        </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["App_id"]."</td>";
       echo "<td>".$row["Roll_no"]."</td>";
         echo"<td> ".$row["gender"]."</td>";
         echo"<td> ".$row["dob"]."</td>";
         echo "<td>".$row["course"]."</td>";
        echo "<td>".$row["source"]."</td>";
        echo "<td>".$row["date_of_app"]."</td>";
        echo "<td>".$row["line"]."</td>";
        echo "<td>".$row["class"]."</td>";
        echo "<td>".$row["pre_certi_no"]."</td>";
        echo "<td>".$row["issued_on"]."</td>";
        echo "<td>".$row["unique_no"]."</td>";
        echo "<td>".$row["expire_date_previous"]."</td></tr>";

   
    }
    echo "</table>";
}
 else {
    echo "0 results";
}

?>



	</body>
</html>