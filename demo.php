<?php
require("server/db.php");
$query = "SELECT roll_no,first_name,middle_name,last_name,gender,course,flat_no,area,society,pin_code FROM student_login inner join student_details on student_login.roll_no=student_details.rollno where student_login.roll_no=501668";
$result = mysqli_query($con, $query);
while ($rows = mysqli_fetch_array($result)){

       $roll_no = $rows['roll_no'];
       $name = $rows['first_name'];
       $middle_name = $rows['middle_name'];
       $last_name = $rows['last_name'];
       $g=$rows['gender'];
       $cour=$rows['course'];
       $flat=$rows['flat_no'];
       $area=$rows['area'];
       $soc=$rows['society'];
       $zip=$rows['pin_code'];
       

      }
      echo $flat;
      echo $area;


?>