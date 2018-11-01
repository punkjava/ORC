<!DOCTYPE html>
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
    margin: 0 auto;
  }

th, td {
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #ECF7F5
}
.ok {
    margin: 5%
    padding:10%;
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}
.ok.btn-signin:hover,
.ok.btn-signin:active,
.ok.btn-signin:focus {
    background-color: rgb(12, 97, 33);
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
.selected {
    background-color: dark blue;
    color: #FFF;
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
        <li class="active"><a   href="adminnav1.php">View Application</a></li>
  <li><a  href="adminnav2.php">Change Password</a></li>
  <li><a href="adminnav3.php">History</a></li>
  <li><a href="server/logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
<div style="overflow-x:auto;">
<?php 
session_start();
include ("server/db.php");
$sql = "SELECT App_id, Roll_no, line,expire_date_previous FROM ticket_details where approved='NULL'or approved='null'";

$result = $con->query($sql);

if ($result->num_rows > 0) 
{
    echo "<br><br><table id='table'>
    <tr>
	<th>ROLL NO</th>
	 <th>APPLICATION ID</th>
    <th>ROUTE</th>
    <th>EXPIRY DATE</th>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row["Roll_no"]."</td>";
        echo "<td>".$row["App_id"]."</td>";
       
         echo"<td> ".$row["line"]."</td>";
        echo "<td>".$row["expire_date_previous"]."</td></tr>";
		
    }
    echo "</table>";
}
 else {
    echo "<br><center>No recent applications!</center>";
}


?>

<center><br><br><br><h4><input type='button' name='oK'  class='ok' value='View'/></center></h4>
<script src="jquery-3.3.1.min.js"></script>
</div>
<script>
$("#table tr").click(function(){
   $(this).addClass('selected').siblings().removeClass('selected');    
   var value=$(this).find('td:first').html();
   alert("Click view to approve apllication of "+value+" applicant"); 
	
});

$('.ok').on('click', function(e){
    var roll = $("#table tr.selected td:first").html();
	var url = "view.php?rol="+roll;
    $(location).attr('href',url);
});

</script>
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


      </div>

    </footer>


</body>
</html>