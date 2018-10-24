<?php
function redirect(){
		header('location: index.html');
	}

if(isset($_POST['submit'])){

	include("server/db.php");
		if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
  		

  		if (!isset($_GET['email'])) {
		redirect();
		exit();
		}
		else{
			include 'server/db.php';
			$email = $con->real_escape_string($_GET['email']);
			$newpassword = $con->real_escape_string($_POST['psw']);

			$sql = $con->query("update student_login set password='$newpassword' where email='$email'");
			echo "<script>
					window.location.href='index.html';
					alert('password reset successfully');
					</script>";
			}
}

?>
<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
	<title>reset</title>
	<style>
		.pass_show{position: relative} 

.pass_show .ptxt { 

position: absolute; 

top: 50%; 

right: 10px; 

z-index: 1; 

color: #f36c01; 

margin-top: -10px; 

cursor: pointer; 

transition: .3s ease all; 

} 

.pass_show .ptxt:hover{color: #333333;} 
	</style>
</head>
<body>

	<div class="container" style="margin-left: 35%;margin-top: 15%;">
	<div class="row">
		<div class="col-sm-4">
		    <form action="" method="post">
		       <label>New Password</label>
            <div class="form-group pass_show"> 
                <input type="password" id="myInput" class="form-control" placeholder="New Password"> 
            </div> 
		       <label>Confirm Password</label>
            <div class="form-group pass_show"> 
                <input type="password" id="myInputa" name="psw" class="form-control" placeholder="Confirm Password"> 
            </div> 
            <input name="submit" class="btn btn-lg btn-primary btn-block" value="submit" type="submit">
            </form>
		</div>  
	</div>
</div>



<script>
	

$(document).ready(function(){
$('.pass_show').append('<span class="ptxt">Show</span>');  
});
  

$(document).on('click','.pass_show .ptxt', function(){ 

$(this).text($(this).text() == "Show" ? "Hide" : "Show"); 

$(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; }); 

});  
</script>
<script>
	var password = document.getElementById("myInput")
  , confirm_password = document.getElementById("myInputa");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

</script>
</body>
</html>