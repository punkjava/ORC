<?php
session_start();
include("dbconnection.php");
if(isset($_POST['Submit']))
{
    $oldpass=$_POST['opwd'];
   # $useremail=$_SESSION['user_name'];
    $newpassword=$_POST['npwd'];
$sql=mysqli_query($con,"SELECT password FROM  admine_details where password='$oldpass'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update admine_details set password='$newpassword' where password='$oldpass'");
$_SESSION['msg1']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>

<!DOCTYPE html>
<html lang="en">
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


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login for Change Password</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
	<!------ Include the above in your HEAD tag ---------->

<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    /*
 * Specific styles of signin component
 */
/*
 * General styles
 */
body, html {
    height: 100%;
    background-repeat: no-repeat;
    background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
}

.card-container.card {
    max-width: 700px;
    padding: 40px 40px;
}

.btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}

/*
 * Card component
 */
.card {
    background-color: #ECF7F5;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 50px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}



/*
 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

.reauth-email {
    display: block;
    color: #404040;
    line-height: 2;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}


.form-signin #inputPassword,
.form-signin #inputPassword1,
.form-signin #inputPassworda {
    direction: ltr;
    height: 44px;
    font-size: 16px;
}

.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin .form-control:focus {
    border-color: rgb(104, 145, 162);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}

.btn.btn-signin {
    /*background-color: #4d90fe; */
    background-color: rgb(104, 145, 162);
    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
    padding: 0px;
    font-weight: 700;
    font-size: 14px;
    height: 36px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
}

.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus {
    background-color: rgb(12, 97, 33);
}

.forgot-password {
    color: rgb(104, 145, 162);
}

.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
    color: rgb(12, 97, 33);
}
    -->
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
<script type="text/javascript">
function valid()
{
if(document.chngpwd.opwd.value=="")
{
alert("Old Password Filed is Empty !!");
document.chngpwd.opwd.focus();
return false;
}
else if(document.chngpwd.npwd.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.npwd.focus();
return false;
}
else if(document.chngpwd.cpwd.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cpwd.focus();
return false;
}
else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cpwd.focus();
return false;
}
return true;
}
</script>
</head>

<body>

<div class="header">
  <img style="width:220px;height:190px"; src="img\fcritlogo.png" alt="Italian Trulli" class="logo">

  <div class="header-right">
      <h1><b style="color:white; font-size:45px";> AGNEL CHARITIES'</h1></b> </p>
        <p style="color:white;font-size:20px";>  FR. C. RODRIGUES INSTITUTE OF TECHNOLOGY</p>
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
      <li><a href="adminnav1.php">View Application </a></li>
      <li class="active"><a href="adminnav2.php">Change Password</a></li>
      <li><a href="his.php">History</a></li>
      <li><a href="server/logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
    <!-- Page Content -->

    <div class="card card-container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1><center>Change your Password</center></h1>
                <center> <p style="color:blue;"><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></p>
             <form name="chngpwd" action="" method="post" onSubmit="return valid();">
              <table align="center">
			  <tr height="50">
			  <td>Old Password :</td>
			  <td><input type="password" name="opwd" id="opwd"></td>
			  </tr>
		  <tr height="50">
			  <td>New Passowrd :</td>
			  <td><input type="password" name="npwd" id="npwd"></td>
			  </tr>
		  <tr height="50">
			  <td>Confirm Password :</td>
			  <td><input type="password" name="cpwd" id="cpwd"></td>
			  </tr>
			  <tr>
			  
			  <td><input type="submit" name="Submit" value="Change Password" /></td>
			  </tr>
                <tr>
              <td></td>
              <td></td>
              </tr>
			  </table>
			  </form>
            </div></div>
        </div>
        <!-- /.row -->
		</center>
    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

 </form><!-- /form -->


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
