<?php 
session_start();
if(!isset($_SESSION['username'])){
  header("Location:index.html");
}
?>
<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/main_page.css">
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!--meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"-->
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
  <li><a  href="history.php">History</a></li>
  <li><a class="active" href="status.php">Status</a></li>
 
  <li><a href="server/logout.php">Logout</a></li>
</ul>

<div class ="area">
  <h2>STATUS HERE</h2>
</div>

</body>
</html>
<script type="text/javascript">
   $(function(){
    $(".area").load("student_status.html");

   });

 </script>

 
