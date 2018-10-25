<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 80%;
}

th {
    height: 40px;
    text-align: left;
    background-color:#4CAF50;
    color: white;
    border: 1px solid #ddd;
    
}
td {
    height: 35px;
	border: 1px #DDD solid;
	padding: 5px; 
	cursor: pointer;
    border: 1px solid #ddd;
    
}
.selected {
    background-color: brown;
    color: #FFF;
}

</style>
</head>
<body>


<?php 
session_start();
include ("server/db.php");
$sql = "SELECT App_id, Roll_no, line,expire_date_previous FROM ticket_details where approved='NULL' or approved='null'";
$result = $con->query($sql);

if ($result->num_rows > 0) 
{
    echo "<br><br><br><br><br><br><br><br><br><table id='table'>
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
        echo "<td>".$row["expire_date_previous"]."</td>";
		
       #echo "<td> </td>";
    }
    echo "</table>";
}
 else {
    echo "<br><br><br><br><br><br><br><br><br><br><br><br><center>No recent applications!</center>";
}


?>
<input type='button' name='OK' class='ok' value='View'/> 
<script src="jquery-3.3.1.min.js"></script>

<script>
$("#table tr").click(function(){
   $(this).addClass('selected').siblings().removeClass('selected');    
   var value=$(this).find('td:first').html();
   alert("Click view to approve apllication of "+value+" applicant");    
});

$('.ok').on('click', function(e){
    var roll = $("#table tr.selected td:first").html();
	var url = "view.php?rol="+roll;
    $(location).attr('href', url);
});
</script>
</body>
</html>