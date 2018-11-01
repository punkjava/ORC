<!DOCTYPE html>
<html>
<head>
   
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />
  

  <title>admin history</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/demo.css">
  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
  <div class="container-fluid>
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
     <li><a  href="adminnav1.php">View Application</a></li>
  <li><a  href="adminnav2.php">Change Password</a></li>
  <li><a  class="active" href="adminnav3.php">History</a></li>
  <li><a href="server/logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
<br>
<br>
<br>
<div style="overflow-x:auto;"><center>
   <?php 
include ("server/db.php");
$no = $_GET['his'];
$sql = "SELECT App_id,Roll_no,gender,DOB,course,source,date_of_app,line,class,pre_certi_no,issued_on,unique_no,expire_date_previous FROM student_details inner join ticket_details on student_details.rollno=ticket_details.Roll_no where student_details.rollno=$no";
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
         echo"<td> ".$row["DOB"]."</td>";
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
	echo"<script> alert('History for entered roll no. does not exist');";
	echo "window.location.href = 'adminnav1.php' </script>";
}

?></center>
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