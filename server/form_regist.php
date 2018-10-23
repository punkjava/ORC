<?php
session_start();
require 'db.php';
$roll_nos=$_SESSION['username'];
$Ticket_no=$_POST['Ticket'];
$duration=$_POST['duration'];
$source=$_POST['Source'];
$rol=$_POST['rono'];
$class=$_POST['class'];
$dob=date('Y-m-d',strtotime($_POST['dob']));
$route=$_POST['Route'];
$present_class=$_POST['present_class'];
$prv_certi=$_POST['prv_certi'];
$prv_class=$_POST['lastclass'];
$issued_on=date('Y-m-d',strtotime($_POST['issue']));
$expiry_date=date('Y-m-d',strtotime($_POST['expiry_date']));

	

	$query = "INSERT INTO ticket_details(App_id, current_Tic_no, duration,source,Roll_no,date_of_app,line,class,pre_certi_no,issued_on, unique_no, expire_date_previous) VALUES (NULL,'$Ticket_no', '$duration', '$source','$rol', CURRENT_TIMESTAMP, '$route', '$class', '$prv_certi', 
		'$issued_on','', '$expiry_date')";
		
		if ($con->query($query) === TRUE) {
			/*echo "<script>
	alert('Your Application has successfully submitted wait for the admin response of verfication');
	window.location.href='../home.php';
	</script>
	";*/
	echo "Error: " . $query . "<br>" . $con->error;
		}

else{
		/*echo "<script>
	alert('something went worng');
	window.location.href='../home.php';
	</script>
	";*/
	echo "Error: " . $query . "<br>" . $con->error;
	}

?>