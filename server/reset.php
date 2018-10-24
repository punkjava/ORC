<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {

	include('db.php');
	
	$mail_id = $con->real_escape_string($_POST['email']);
	$sql = $con->query("select email from student_login where email='$mail_id'");
	#$query = "select email from student_login where email='$mail_id'";

	#$result = mysqli_query($con,$query) or die(mysqli_error());
	#$rows = mysqli_num_rows($result);
	if ($sql->num_rows==0) 
	{  
		echo "incorrect email";
		echo "<script>
		window.location.href='../password_reset_form.html';
			alert('email doesn't exists');
		</script>"; 
	
	}
	/*if($rows==0){
		$rows=$mail_id;
		echo "<script>
		window.location.href='../password_reset_form.html';
			alert('email doesn't exists');
		</script>"; 
	}*/

	else{

		require '../vendor/autoload.php';
		require '../vendor/phpmailer/phpmailer/src/SMTP.php';
		 $mail = new PHPMailer();
    	 $mail->isSMTP();
    	 $mail->Host = "smtp.gmail.com";
    	 $mail->Port=587;
    	 $mail->SMTPAuth=true;
	     $mail->SMTPSecure="tls";
   	     /*$mail->SMTPDebug = 1;*/
   	     $mail->SMTPOptions = array(
					'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
					)
				);
		 		
         $mail->Username='ip.proj.orc@gmail.com'; //emailid
	    $mail->Password='project_Orc'; //password
	
	    $mail->setfrom("ip.proj.orc@gmail.com");
	     $mail->addAddress($mail_id);
	
     	$mail->isHTML(true);
		
	$mail->Subject="Change password";
	
		$mail->Body ="click on this link below to Change Your password<br>

	<a href= 'http://localhost:8800/ORC/new_password.php?email=$mail_id'>
			click here :-)
	</a>
		";
	
	
			if(!$mail->send()) {
		    echo 'Message could not be sent.<br>';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				echo "<script>
					window.location.href='../index.html';
					alert('check your mail to reset your password');
					</script>";
					}

	}
}

	
?>