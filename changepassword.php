<?php
session_start();
include("dbconnection.php");
if(isset($_POST['Submit']))
{
    $oldpass=$_POST['opwd'];
    #$useremail=$_SESSION['user_name'];
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
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
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

    <!-- Page Content -->
	<br><br><br>
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1><center>Change your Password</center></h1>
                <center>   <p style="color:red;"><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></p></center>
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
			  
			  <td><input type="submit" name="Submit" value="Change Passowrd" /></td>
			  </tr>
                <tr>
              <td></td>
              <td></td>
              </tr>
			  </table>
			  </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
