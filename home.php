<?php session_start();
if(!isset($_SESSION['username'])){
  header("Location:index.html");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="css/main_page.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>   
<!--link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
 

</head>



  <header class="header">
    <div class="logo">
    <img src="img/fcritlogo.png" > 
    

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



<body>
<div class="na_bar">
<ul>
  <li><a class="active" href="home.php">Form</a></li>
  <li><a href="student_history.php">History</a></li>
  <li><a href="status.php">Status</a></li>
  <li><a href="demo.html">Notice</a></li>
  <li><a href="server/logout.php">Logout</a></li>
</ul>

</div>

  <div  class="area">
    <iframe scrolling="yes">
    </iframe>
</div>


</body>
</html>
<!--script
  src="https://code.jquery.com/jquery-1.12.4.js"
  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  crossorigin="anonymous"></script-->
<script>
 

   $(document).ready(function(){
     
       $(".area").load("appl_form.php");
   });

 </script>
