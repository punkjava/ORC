
<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<title>status</title>
<link rel="stylesheet" type="text/css" href="css/main_page.css">
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->

</head>
<body>


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
  <li><a  href="student_history.php">History</a></li>
  <li><a class="active" href="status.php">Status</a></li>
 <li><a href="demo.html">Notice</a></li>
  <li><a href="server/logout.php">Logout</a></li>
</ul>

<?php 
session_start();
$roll_nos=$_SESSION['username'];
  if(isset($_POST['Submit']))
{
  inclued("server/db.php");
  $sql="SELECT unique_no,approved FROM  ticket_details where Roll_no ='$roll_nos'";
  $result = mysqli_query($con, $sql);

  while($row = mysqli_fetch_array($result)){
    echo "<center><br><br><br><br><br><br><br><br><br><br>";
    echo $row["approved"];
    echo "<br><br><br><br><br><br>";
    echo $row["unique_no"];
    echo "</center>";
  }
}
?>

</body>
</html>
