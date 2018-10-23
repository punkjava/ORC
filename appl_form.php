<?php
session_start();
require("server/db.php");
include("student_login");
global $name;

  $roll_nos=$_SESSION['username'];
$query = "SELECT roll_no,first_name,middle_name,last_name,gender,DOB,course,flat_no,area,society,pin_code FROM student_login inner join student_details on student_login.roll_no=student_details.rollno where student_login.roll_no=$roll_nos";

$result = mysqli_query($con, $query);
while ($rows = mysqli_fetch_array($result)){

       $roll_no = $rows['roll_no'];
       $name = $rows['first_name'];
       $middle_name = $rows['middle_name'];
       $last_name = $rows['last_name'];
       $g=$rows['gender'];
       $dob=$rows['DOB'];
        $cour=$rows['course'];
       $flat=$rows['flat_no'];
       $area=$rows['area'];
       $soc=$rows['society'];
       $zip=$rows['pin_code'];
       

      }


?>

<html>
<head>
<title>FORM</title>
<style>
.col{
	background-color:#4CAF50;
box-sizing: border-box;
border: 1px solid;
	text-align:left;
	color:white;
  width: 50%;
   margin-left: 30%;
   margin-top: 20%;
}


input[type=submit] {
    background-color: steelblue;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;

}
input[type=password]{
    width: 80%;
     padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;}

input[type=text]{
  width:50%;
  padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type=date]{
  width:80%;
  padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
}
.select{
  float:inline;
}

.b
{
	margin:20px;
}
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.desc {
    padding: 15px;
    text-align: center;
}


</style>
</head>
<body>

<h1 style="margin-top: 15%; float: right;">Welcome <?php echo $name;?>!!</h1>
<div class="col">

  <div class="b">
The Principal,<br>
Fr.CRIT, Vashi,<br>
Navi Mumbai,<br>
Respected sir,<br>
<br>
I desire to travel by train from my residence to the institute. A railway concession form may be kindly issued to me. The required details for the same are furnished as here under.</p>

  CLICK FOR REFERENCE:<br>
  <div class="dropdown">
  <img src="img\IMG-20180910-WA0006.jpg" alt="HELP" width="100" height="50">
  <div class="dropdown-content">
    <img src="img\IMG-20180910-WA0006.jpg" alt="HELP" width="600" height="400">
    <div class="desc">Beautiful Cinque Terre</div>
  </div>
</div>
              <form method="post" action="server/form_regist.php">
	
	               <h1><b>PERSONAL DETAILS:</b></h1>
	
                <input class="field" name="FirstName" required type="text" value=<?php echo $name;?> disabled/>
	               <input class="field" name="LastName" required type="text" value=<?php echo $last_name;?> disabled />
	               <input class="field" name="MiddleName" required type="text" value=<?php echo $middle_name;?> disabled/><br><br>
                Destination:<input type="text" name="desti"  value="Vashi" required  disabled/>
               <br><br>

                <div class="select">
                Source:<select name="Source" style="font-size:Medium;width:244px;">

  <option value="Airoli">Airoli</option>
  <option value="Ambarnath">Ambarnath</option>
  <option value="Ambivli">Ambivli</option>
  <option value="Andheri">Andheri</option>
  <option value="Asangaon">Asangaon</option>
  <option value="Atgaon">Atgaon</option>
  <option value="Badlapur">Badlapur</option>
  <option value="Bamandongri">Bamandongri</option>
  <option value="Bandra">Bandra</option>
  <option value="Bhandup">Bhandup</option>
  <option value="Bhayandar">Bhayandar</option>
  <option value="Bhivpuri Road">Bhivpuri Road</option>
  <option value="Bhiwandi">Bhiwandi</option>
  <option value="Boisar">Boisar</option>
  <option value="Borivali">Borivali</option>
  <option value="Byculla">Byculla</option>
  <option value="CBD Belapur">CBD Belapur</option>
  <option value="Charni Road">Charni Road</option>
  <option value="Chembur">Chembur</option>
  <option value="Chhatrapati Shivaji Terminus">Chhatrapati Shivaji Terminus</option>
  <option value="Chinchpokli">Chinchpokli</option>
  <option value="Chunabhatti">Chunabhatti</option>
  <option value="Churchgate">Churchgate</option>
  <option value="Cotton Green">Cotton Green</option>
  <option value="Currey Road">Currey Road</option>
  <option value="Dadar">Dadar</option>
  <option value="Dahanu Road">Dahanu Road</option>
  <option value="Dahisar">Dahisar</option>
  <option value="Dativali">Dativali</option>
  <option value="Diva Junction">Diva Junction</option>
  <option value="Dockyard Road">Dockyard Road</option>
  <option value="Dolavli">Dolavli</option>
  <option value="Dombivli">Dombivli</option>
  <option value="Dronagiri">Dronagiri</option>
  <option value="Elphinstone Road">Elphinstone Road</option>
  <option value="Gavhan">Gavhan</option>
  <option value="Ghansoli">Ghansoli</option>
  <option value="Ghatkopar">Ghatkopar</option>
  <option value="Goregaon">Goregaon</option>
  <option value="Govandi">Govandi</option>
  <option value="Grant Road">Grant Road</option>
  <option value="Guru Tegh Bahadur Nagar">Guru Tegh Bahadur Nagar</option>
  <option value="Jogeshwari">Jogeshwari</option>
  <option value="Juchandra">Juchandra</option>
  <option value="Juinagar">Juinagar</option>
  <option value="Kalamboli">Kalamboli</option>
  <option value="Kalwa">Kalwa</option>
  <option value="Kalyan">Kalyan</option>
  <option value="Kaman Road">Kaman Road</option>
  <option value="Kandivali">Kandivali</option>
  <option value="Kanjurmarg">Kanjurmarg</option>
  <option value="Karjat">Karjat</option>
  <option value="Kasara">Kasara</option>
  <option value="Kelavli">Kelavli</option>
  <option value="Kelve Road">Kelve Road</option>
  <option value="Khadavli">Khadavli</option>
  <option value="Khandeshwar">Khandeshwar</option>
  <option value="Khar Road">Khar Road</option>
  <option value="Kharbao">Kharbao</option>
  <option value="Khardi">Khardi</option>
  <option value="Kharghar">Kharghar</option>
  <option value="Kharkopar">Kharkopar</option>
  <option value="Khopoli">Khopoli</option>
  <option value="Kings Circle">Kings Circle</option>
  <option value="Kopar">Kopar</option>
  <option value="Kopar Khairane">Kopar Khairane</option>
  <option value="Kurla">Kurla</option>
  <option value="Lower Parel">Lower Parel</option>
  <option value="Lowjee">Lowjee</option>
  <option value="Mahalaxmi">Mahalaxmi</option>
  <option value="Mahim">Mahim</option>
  <option value="Malad">Malad</option>
  <option value="Mankhurd">Mankhurd</option>
  <option value="Mansarovar">Mansarovar</option>
  <option value="Marine Lines">Marine Lines</option>
  <option value="Masjid">Masjid</option>
  <option value="Matunga">Matunga</option>
  <option value="Matunga Road">Matunga Road</option>
  <option value="Mira Road">Mira Road</option>
  <option value="Mulund">Mulund</option>
  <option value="Mumbai Central">Mumbai Central</option>
  <option value="Mumbra">Mumbra</option>
  <option value="Nahur">Nahur</option>
  <option value="Naigaon">Naigaon</option>
  <option value="Nalasopara">Nalasopara</option>
  <option value="Neral">Neral</option>
  <option value="Nerul">Nerul</option>
  <option value="Nevade Road">Nevade Road</option>
  <option value="Nhava-Sheva">Nhava-Sheva</option>
  <option value="Nilaje">Nilaje</option>
  <option value="Oshiwara">Oshiwara</option>
  <option value="Palasdari">Palasdari</option>
  <option value="Palghar">Palghar</option>
  <option value="Panvel">Panvel</option>
  <option value="Parel">Parel</option>
  <option value="Pen">Pen</option>
  <option value="Rabale">Rabale</option>
  <option value="Ranjanpada">Ranjanpada</option>
  <option value="Roha">Roha</option>
  <option value="Sagar Sangam">Sagar Sangam</option>
  <option value="Sandhurst Road">Sandhurst Road</option>
  <option value="Sanpada">Sanpada</option>
  <option value="Santa Cruz">Santa Cruz</option>
  <option value="Saphale">Saphale</option>
  <option value="Seawoods–Darave">Seawoods–Darave</option>
  <option value="Sewri">Sewri</option>
  <option value="Shahad">Shahad</option>
  <option value="Shelu">Shelu</option>
  <option value="Sion">Sion</option>
  <option value="Targhar">Targhar</option>
  <option value="Thakurli">Thakurli</option>
  <option value="Thane">Thane</option>
  <option value="Tilak Nagar">Tilak Nagar</option>
  <option value="Titwala">Titwala</option>
  <option value="Turbhe">Turbhe</option>
  <option value="Ulhasnagar">Ulhasnagar</option>
  <option value="Umroli">Umroli</option>
  <option value="Uran">Uran</option>
  <option value="Vadala Road">Vadala Road</option>
  <option value="Vaitarna Road">Vaitarna Road</option>
  <option value="Vangani">Vangani</option>
  <option value="Vangaon">Vangaon</option>
  <option value="Vasai Road">Vasai Road</option>
  <option value="Vashi">Vashi</option>
  <option value="Vasind">Vasind</option>
  <option value="Vidyavihar">Vidyavihar</option>
  <option value="Vikhroli">Vikhroli</option>
  <option value="Vile Parle">Vile Parle</option>
  <option value="Virar">Virar</option>
  <option value="Vithalwadi">Vithalwadi</option>

</select><br>
                
             
                
              Gender:<input type="text" name="sex" value="<?php echo $g;?>"disabled/>
             
                 <!--
                <select name="Gender" style="font-size:Medium;width:244px;">
              
                  <option disabled="" selected="" value="0">Choose Gender</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                </select>-->
                <br><br>
                <select name="Route" style="font-size:Medium;width:244px;">
                  <option disabled="" selected="" value="0">Choose Route</option>
                  <option value="Central">Central</option>
                  <option value="Western">Western</option>
                </select><br><br>
                 <select name="duration"  style="font-size:Medium;width:244px;">
                  <option value="0">Choose Duration</option>
                  <option value="Monthly">Monthly</option>
                  <option value="Quaterly">Quaterly</option>
                </select><br><br>
                <select name="class" style="font-size:Medium;width:244px;">
                  <option value="0">Choose Class</option>
                  <option value="First">First</option>
                  <option value="Second">Second</option>
                </select><br><br>
             </div>
                <textarea class="field" name="addr" rows="5" cols="60" style="font-size: medium;" disabled><?php 
                echo $flat;
                echo " ";
                echo $area;
                echo " ";
                echo $soc;
                echo " ";
                echo $zip; ?></textarea><br><br>


                 Date of Birth <br><input type="date" data-date-inline-picker="true" name="dob"  onfocusout="_calcAge()" id="mydate" /><br><br>
                 Enter Age:<br>
                 <input type="text" name="age" placeholder="Enter years" id="year" disabled > 
                <input type="text" name="month" placeholder="Enter months" id="month" disabled ><br>
	 

        <h1><b>PREVIOUS PASS DETAILS:</b></h1>
                <select name="lastclass" style="height:40px; width:180px ";>
                  <option value="First">First</option>
                  <option value="Second">Second</option>
                </select>
      Ticket no:<input type="text" name="Ticket" placeholder="Enter Ticket no" required><br><br>
      
         <!-- Source:<select name="source" style="font-size:Medium;width:244px;">

  <option value="Airoli">Airoli</option>
  <option value="Ambarnath">Ambarnath</option>
  <option value="Ambivli">Ambivli</option>
  <option value="Andheri">Andheri</option>
  <option value="Asangaon">Asangaon</option>
  <option value="Atgaon">Atgaon</option>
  <option value="Badlapur">Badlapur</option>
  <option value="Bamandongri">Bamandongri</option>
  <option value="Bandra">Bandra</option>
  <option value="Bhandup">Bhandup</option>
  <option value="Bhayandar">Bhayandar</option>
  <option value="Bhivpuri Road">Bhivpuri Road</option>
  <option value="Bhiwandi">Bhiwandi</option>
  <option value="Boisar">Boisar</option>
  <option value="Borivali">Borivali</option>
  <option value="Byculla">Byculla</option>
  <option value="CBD Belapur">CBD Belapur</option>
  <option value="Charni Road">Charni Road</option>
  <option value="Chembur">Chembur</option>
  <option value="Chhatrapati Shivaji Terminus">Chhatrapati Shivaji Terminus</option>
  <option value="Chinchpokli">Chinchpokli</option>
  <option value="Chunabhatti">Chunabhatti</option>
  <option value="Churchgate">Churchgate</option>
  <option value="Cotton Green">Cotton Green</option>
  <option value="Currey Road">Currey Road</option>
  <option value="Dadar">Dadar</option>
  <option value="Dahanu Road">Dahanu Road</option>
  <option value="Dahisar">Dahisar</option>
  <option value="Dativali">Dativali</option>
  <option value="Diva Junction">Diva Junction</option>
  <option value="Dockyard Road">Dockyard Road</option>
  <option value="Dolavli">Dolavli</option>
  <option value="Dombivli">Dombivli</option>
  <option value="Dronagiri">Dronagiri</option>
  <option value="Elphinstone Road">Elphinstone Road</option>
  <option value="Gavhan">Gavhan</option>
  <option value="Ghansoli">Ghansoli</option>
  <option value="Ghatkopar">Ghatkopar</option>
  <option value="Goregaon">Goregaon</option>
  <option value="Govandi">Govandi</option>
  <option value="Grant Road">Grant Road</option>
  <option value="Guru Tegh Bahadur Nagar">Guru Tegh Bahadur Nagar</option>
  <option value="Jogeshwari">Jogeshwari</option>
  <option value="Juchandra">Juchandra</option>
  <option value="Juinagar">Juinagar</option>
  <option value="Kalamboli">Kalamboli</option>
  <option value="Kalwa">Kalwa</option>
  <option value="Kalyan">Kalyan</option>
  <option value="Kaman Road">Kaman Road</option>
  <option value="Kandivali">Kandivali</option>
  <option value="Kanjurmarg">Kanjurmarg</option>
  <option value="Karjat">Karjat</option>
  <option value="Kasara">Kasara</option>
  <option value="Kelavli">Kelavli</option>
  <option value="Kelve Road">Kelve Road</option>
  <option value="Khadavli">Khadavli</option>
  <option value="Khandeshwar">Khandeshwar</option>
  <option value="Khar Road">Khar Road</option>
  <option value="Kharbao">Kharbao</option>
  <option value="Khardi">Khardi</option>
  <option value="Kharghar">Kharghar</option>
  <option value="Kharkopar">Kharkopar</option>
  <option value="Khopoli">Khopoli</option>
  <option value="Kings Circle">Kings Circle</option>
  <option value="Kopar">Kopar</option>
  <option value="Kopar Khairane">Kopar Khairane</option>
  <option value="Kurla">Kurla</option>
  <option value="Lower Parel">Lower Parel</option>
  <option value="Lowjee">Lowjee</option>
  <option value="Mahalaxmi">Mahalaxmi</option>
  <option value="Mahim">Mahim</option>
  <option value="Malad">Malad</option>
  <option value="Mankhurd">Mankhurd</option>
  <option value="Mansarovar">Mansarovar</option>
  <option value="Marine Lines">Marine Lines</option>
  <option value="Masjid">Masjid</option>
  <option value="Matunga">Matunga</option>
  <option value="Matunga Road">Matunga Road</option>
  <option value="Mira Road">Mira Road</option>
  <option value="Mulund">Mulund</option>
  <option value="Mumbai Central">Mumbai Central</option>
  <option value="Mumbra">Mumbra</option>
  <option value="Nahur">Nahur</option>
  <option value="Naigaon">Naigaon</option>
  <option value="Nalasopara">Nalasopara</option>
  <option value="Neral">Neral</option>
  <option value="Nerul">Nerul</option>
  <option value="Nevade Road">Nevade Road</option>
  <option value="Nhava-Sheva">Nhava-Sheva</option>
  <option value="Nilaje">Nilaje</option>
  <option value="Oshiwara">Oshiwara</option>
  <option value="Palasdari">Palasdari</option>
  <option value="Palghar">Palghar</option>
  <option value="Panvel">Panvel</option>
  <option value="Parel">Parel</option>
  <option value="Pen">Pen</option>
  <option value="Rabale">Rabale</option>
  <option value="Ranjanpada">Ranjanpada</option>
  <option value="Roha">Roha</option>
  <option value="Sagar Sangam">Sagar Sangam</option>
  <option value="Sandhurst Road">Sandhurst Road</option>
  <option value="Sanpada">Sanpada</option>
  <option value="Santa Cruz">Santa Cruz</option>
  <option value="Saphale">Saphale</option>
  <option value="Seawoods–Darave">Seawoods–Darave</option>
  <option value="Sewri">Sewri</option>
  <option value="Shahad">Shahad</option>
  <option value="Shelu">Shelu</option>
  <option value="Sion">Sion</option>
  <option value="Targhar">Targhar</option>
  <option value="Thakurli">Thakurli</option>
  <option value="Thane">Thane</option>
  <option value="Tilak Nagar">Tilak Nagar</option>
  <option value="Titwala">Titwala</option>
  <option value="Turbhe">Turbhe</option>
  <option value="Ulhasnagar">Ulhasnagar</option>
  <option value="Umroli">Umroli</option>
  <option value="Uran">Uran</option>
  <option value="Vadala Road">Vadala Road</option>
  <option value="Vaitarna Road">Vaitarna Road</option>
  <option value="Vangani">Vangani</option>
  <option value="Vangaon">Vangaon</option>
  <option value="Vasai Road">Vasai Road</option>
  <option value="Vashi">Vashi</option>
  <option value="Vasind">Vasind</option>
  <option value="Vidyavihar">Vidyavihar</option>
  <option value="Vikhroli">Vikhroli</option>
  <option value="Vile Parle">Vile Parle</option>
  <option value="Virar">Virar</option>
  <option value="Vithalwadi">Vithalwadi</option>

</select><br>

        Destination:<input type="text" name="desti" value="Vashi" required disabled><br><br>-->

<input type="text" name="prv_certi"  placeholder="Previous Certificate No" required><br><br>


Roll_no:<input type="text" name="rono"  required  disabled 
value=<?php echo $roll_nos;?>  />
Course:<input type="text" name="crs" disabled required value="<?php echo $cour;?>" />
<select name="present_class" style="height:40px; width:180px;">
                  
                  <option value="1">1</option>
                  <option value="2">2</option>
                </select>
<br>
Date of Expiry: <br>	<input type="date" data-date-inline-picker="true" name="expiry_date" /><br>
<br>
Issued on: 	<br>	<input type="date" data-date-inline-picker="true" name="issue" />

<br>
<br>
     
      <center><input type="Submit" value="Submit" name="submit" style="vertical-align:middle"></center>
    
<br>
<br>
<br>
</div>
</div>
</form>

<!--<script
  src="https://code.jquery.com/jquery-1.12.4.js"
  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  crossorigin="anonymous"></script>

    <script>
      
     $(document).ready(function(){
       

      
       $('#mydate').change(function(){
        var date = $('#mydate').val();
        var month = $('#month').val();
        var today = new Date(date);
         console.log(today);
        console.log(today.getTime());

            var timeDiff = Math.abs(today.getTime());
            var a = Math.ceil(timeDiff / (1000 * 3600 * 24)) / 365;

            var age = new Date(a);
            var year=age.getYear();
            var month=age.getMonth();
            
            a=a.toFixed(2);
            var y=Math.floor(a);
            document.getElementById("year").value = y.toString();

            m=(a-y)*10;
            m=m.toFixed(2);
            m=Math.ceil(m);
            document.getElementById("month").value = m.toString();
       });      
   });

    </script-->

</body>
</html>

<script>
           
        function _calcAge() {
            var date = new Date(document.getElementById("mydate").value);
            
            
            var month=document.getElementById("month");
            var today = new Date();

            var timeDiff = Math.abs(today.getTime() - date.getTime());
            var a = Math.ceil(timeDiff / (1000 * 3600 * 24)) / 365;
            
            var age = new Date(a);
            var year=age.getYear();
            var month=age.getMonth();
            
            a=a.toFixed(2);
            var y=Math.floor(a);
            document.getElementById("year").value = y.toString();

            m=(a-y)*10;
            m=m.toFixed(2);
            m=Math.ceil(m);
            document.getElementById("month").value = m.toString();

            
        }

    </script>

