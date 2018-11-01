<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
	include('db.php');
	$username = $con->real_escape_string($_POST['username']);
	$password = $con->real_escape_string($_POST['password']);
	$mail_id = $con->real_escape_string($_POST['email']);

	$sql2 = $con->query("select roll_no from student_login where roll_no='$username'");
	$sql1 = $con->query("select email from student_login where email='$mail_id'");
	if ($sql2->num_rows==0) 
	{  echo "<script>
			window.location.href='../registeration.html';
			alert('roll_no dosent exists');
		</script>"; 
	
	}

		


	elseif($sql1->num_rows>0) {
		echo "<script>
			window.location.href='../registeration.html';
			alert('Email already exists');
		</script>";
	}
	else
	{
		$token = "abdefghijklmnopqrstuvwxyzABCDEG*/-/#$@#123";
		$token = str_shuffle($token);
		$token = substr($token,0,10);	

		
		$con->query("update student_login set password='$password',email='$mail_id',
					token='$token' where roll_no=$username");
			

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
		
	$mail->Subject="verify email";
	
		$mail->Body ="click on this link below <br>

	<a href= 'http://localhost:8800/ORC/server/confmail.php?email=$mail_id&token=$token'>
			click here :-)
	</a>
		";
	
	
	if(!$mail->send()) {
    echo 'Message could not be sent.<br>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo "<script>
			window.location.href='../index.html';
			alert('verify your email');
		</script>";
}

	}
}
?>