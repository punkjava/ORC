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

    border: 1px solid #ddd;
    
}
</style>
</head>
<body>


<?php 
include ("server/db.php");
$sql = "SELECT App_id,Roll_no,gender,DOB,course,source,date_of_app,line,class,pre_certi_no,issued_on,unique_no,expire_date_previous FROM student_details inner join ticket_details on student_details.rollno=ticket_details.Roll_no";
$result = $con->query($sql);

if ($result->num_rows > 0) 
{
    echo "<br><br><br><br><br><br><br><br><br><table>
    <tr>
    <th>APPLICATION ID</th>
    <th>ROLL NO</th>
    <th>GENDER</th>
    <th>D.O.B</th>
    <th>COURSE</th>
    <th>SOURCE</th>
    <th>D.O.APP</th>
    <th>ROUTE</th>
    <th>CLASS</th>
    <th>P.CERTI.NO</th>
    <th>ISSUED ON</th>
    <th>UNIQUE NO</th>
    <th>EXPIRY DATE</th>
        </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["App_id"]."</td>";
       echo "<td>".$row["Roll_no"]."</td>";
         echo"<td> ".$row["gender"]."</td>";
         echo"<td> ".$row["DOB"]."</td>";
         echo "<td>".$row["course"]."</td>";
        echo "<td>".$row["source"]."</td>";
        echo "<td>".$row["date_of_app"]."</td>";
        echo "<td>".$row["line"]."</td>";
        echo "<td>".$row["class"]."</td>";
        echo "<td>".$row["pre_certi_no"]."</td>";
        echo "<td>".$row["issued_on"]."</td>";
        echo "<td>".$row["unique_no"]."</td>";
        echo "<td>".$row["expire_date_previous"]."</td></tr>";

   
    }
    echo "</table>";
}
 else {
    echo "0 results";
}

?>

</body>
</html>