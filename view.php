<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />
  

 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/demo.css">
  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style type="text/css">
* {box-sizing: border-box;}
.iframe-container {
    position: relative;
    overflow: hidden;
    padding-top: 56.25%;
}
.iframe-container iframe {
  position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #75E346;
  padding: 30px 20px;
}

.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 25px;
  text-decoration: none;
  font-size: 22px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 0px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ffffff;
  color: white;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
 -webkit-animation: header-right 3s ease-out;
 -webkit-animation-iteration-count: infinite; 
  opacity: 0.5;
}
@-webkit-keyframes header-right {
    0% { 
        opacity: 0.5;
    }
    50% { 
        opacity: 1.0;
    }
    100% { 
        opacity: 0.5;
    }
}
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 80%;
    border: 2px solid #ddd;
    margin: 0 auto;
  }

th, td {
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #ECF7F5
}


@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: center;
  }
  .header-right {
    float: none;
    color: white
  }
}
</style>
</head>



<body>
	<div class="header">
  
  <img style="width:280px;height:190px"; src="img\fcritlogo.png" alt="Italian Trulli" class="logo">


  <div class="header-right">
      <h1><b style="color:white; font-size:60px";> AGNEL CHARITIES'</h1></b> </p>
        <p style="color:white;font-size:30px";>  FR. C. RODRIGUES INSTITUTE OF TECHNOLOGY</p>
        <p style="word-spacing: 2px; color:white;font-size:20px";> Agnel Technical Education Complex 
                        Sector 9-A, Vashi, Navi Mumbai,
                        Maharashtra, India 
                        PIN - 400703 </p>
       
     </div>
  
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">View Application </a></li>
      <li><a href="#">Change Password</a></li>
      <li><a href="#">History</a></li>
      <li><a href="#">Logout</a></li>
    </ul>

   
  </div>
</nav>
<div style="overflow-x:auto;">
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
   echo "<a href='check.php'>VALIDATE</a>";
   
} 
else {
    echo "0 results";

$con->close();
echo("</div>");
}
}
?>
</div>
<footer class="footer-distributed">

      <div class="footer-left">
        <div class="iframe-container">
        <!--iframe-->

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1333.1547546856166!2d72.992872017905!3d19.07555815426853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6cae0d8c5ab%3A0xbbf4481d662ca2d8!2sFr.+C.+Rodrigues+Institute+of+Technology!5e0!3m2!1sen!2sin!4v1535193529007" 
width="450" height="250" frameborder="0" style="border:0" allowfullscreen></iframe> 

        <p class="footer-company-name">F.C.R.I.T,Vashi &copy; 2018</p>
      </div>
    </div>


      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Fr. C. Rodrigues Institute of Technology
</span> Agnel Technical Education Complex <br>
Sector 9-A, Vashi, Navi Mumbai,<br>
Maharashtra, India <br>
PIN - 400703<br></p>
        </div>
        <br>
        <div>
          <i class="fa fa-phone"></i>
          <p>(022) 27771000 <br>27662949<br>
           (022) 27660619<br></p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">support@fcrit.ac.in<br></a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the Institute</span>
          Father Conceicao Rodrigues Institute of Technology' is a private engineering college affiliated to the University of Mumbai located in vashi, Navi Mumbai.
        </p>

        <div class="footer-icons">

          <a href="https://www.facebook.com/pages/Fr-Conceicao-Rodrigues-Institute-of-Technology/109529155739829"><i class="fa fa-facebook"></i></a>
          
          <a href="https://in.linkedin.com/in/fyp-fcrit-87bb6016a"><i class="fa fa-linkedin"></i></a>
          <a href="https://github.com/FCRIT"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>

</body>
</html>