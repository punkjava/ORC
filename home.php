<?php
session_start();
if(!isset($_SESSION['username'])){
 
 header("Location:index.html");
}
$roll_nos =  $_SESSION['username'];
require("server/db.php");
//include("server/student_login.php");
global $name;

  
$query = "SELECT roll_no,first_name,middle_name,last_name,gender,DOB,course,flat_no,area,society,pin_code FROM student_login inner join student_details on student_login.roll_no=student_details.rollno where student_login.roll_no = $roll_nos";

$result = mysqli_query($con, $query);

  # code...
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
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />
  

  <title>nav</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/demo.css">
  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
body, html {
    height: 100%;
    background-repeat: no-repeat;
  
}

.card-container.card {
    max-width: 800px;
    padding: 65px 65px;
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
    padding: 0px 0px 30px;
    margin: 0 auto 25px;
    #margin-top: 50px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.3);
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

.form-signin #inputPassworda,
.form-signin #inputPassword,
.form-signin #inputPassword1,
.form-signin #inputrn  {
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
      <li class="active"><a href="home.php">Form </a></li>
      <li><a href="student_history.php">History</a></li>
      <li><a href="status.php">Status</a></li>
      <li><a href="student_notice.html">Notice</a></li>
      <li><a href="stud_chgpsw.php">Change Password</a></li>
      <li><a href="server/logout.php">Logout</a></li>

    </ul>
  </div>
</nav>
  <h1 style="float: center;">Welcome <?php echo $name;?>!!</h1>
    <div class="container">
        <div class="card card-container">
            
            <b><center>APPLICATION FORM</center></b><br>
            To,<br>
            The Principal,<br>
Fr.CRIT, Vashi,<br>
Navi Mumbai,<br>
Respected sir,<br>
<br>
I desire to travel by train from my residence to the institute. A railway concession form may be kindly issued to me. The required details for the same are furnished as here under.</p><br>
CLICK FOR REFERENCE:<br>
  <div class="dropdown">
  <img src="img\IMG-20180910-WA0006.jpg" alt="HELP" width="80" height="80">
  <div class="dropdown-content">
    <img src="img\IMG-20180910-WA0006.jpg" alt="HELP" width="300" height="200"><br>
    
  </div>
</div>
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post" action="server/form_regist.php">
                <br>
                <h2><b>PERSONAL DETAILS:</b></h2><hr><br><br><br>
                FIRST NAME:<input class="form-control" id="inputrn" name="FirstName" required disabled type="text" value=<?php echo $name;?> ><br>
                LAST NAME:<input class="form-control" id="inputrn" name="LastName" required type="text" value=<?php echo $last_name;?> disabled><br>
                MIDDLE NAME:<input class="form-control" id="inputrn" name="MiddleName" required type="text" value=<?php echo $middle_name;?> disabled><br>
                DESTINATION:<input type="text" class="form-control" id="inputrn" name="desti"  value="Vashi" required  disabled/><br>
                <div class="select">
                SOURCE:<br><select name="Source" class="form-control" id="inputrn"><br>

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

</select><br><br>

            GENDER:<br><input type="text" name="sex" class="form-control" id="inputrn" value="<?php echo $g;?>"disabled/><br>
            ROUTE:<BR><select name="Route" class="form-control" id="inputrn">
                  <option disabled="" selected="" value="0">Choose Route</option>
                  <option value="Central">Central</option>
                  <option value="Western">Western</option>
                </select><br><br>
             DURATION:<br><select name="duration"  class="form-control" id="inputrn">
                  <option value="0">Choose Duration</option>
                  <option value="Monthly">Monthly</option>
                  <option value="Quaterly">Quaterly</option>
                </select><br><br>
              CLASS:<br><select name="class" class="form-control" id="inputrn">
                  <option value="0">Choose Class</option>
                  <option value="First">First</option>
                  <option value="Second">Second</option>
                </select><br><br>
                ADDRESS:<br><textarea class="form-control" id="inputrn" name="addr" rows="5" cols="34" style="font-size: medium;" disabled><?php 
                echo $flat;
                echo " ";
                echo $area;
                echo " ";
                echo $soc;
                echo " ";
                echo $zip; ?></textarea><br><br>
                DATE OF BIRTH:<br><input type="date" class="form-control" id="inputPassword1"data-date-inline-picker="true" name="dob"  onfocusout="_calcAge()"/><br><br>
                 ENTER AGE:<br>
                 <input type="text" name="age" class="form-control" id="inputPassword" placeholder="Enter years" disabled><br>
                <input type="text" name="month" placeholder="Enter months" class="form-control" id="inputPassworda" disabled ><br><br>

                <h2><b>PREVIOUS PASS DETAILS:</b></h2><hr><br>
                CLASS:<br><select name="lastclass" class="form-control" id="inputrn"><br>
                  <option value="First">First</option>
                  <option value="Second">Second</option>
                </select><br><br>
                TICKET NO:<br><input type="text" class="form-control" id="inputrn" name="Ticket" placeholder="Enter Ticket no" required><br>
                PREVIOUS CERTIFICATE NO<input type="text" name="prv_certi"  placeholder="Previous Certificate No" class="form-control" id="inputrn" required/><br>


                ROLL NO:<input type="text" class="form-control" id="inputrn" name="rono" value="<?php echo $roll_no;?>" required  disabled /><br>
                COURSE:<input type="text" class="form-control" id="inputrn" name="crs" disabled required value="<?php echo $cour;?>" /><br>

                DATE OF EXPIRY: <br>    <input type="date" data-date-inline-picker="true" name="expiry_date" class="form-control" id="inputrn"/><br>
                    <br>
                ISSUED ON:  <br>    <input type="date" data-date-inline-picker="true" name="issue" class="form-control" id="inputrn" />


<br>
<br>
     <br>



                
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">SUBMIT</button>
           
        
        </div><!-- /card-container -->
    </div><!-- /container -->
</div>

 </form><!-- /form -->
 <script type="text/javascript">
    
        function _calcAge() {
            var date = new Date(document.getElementById("inputPassword1").value);
            
            
            var month=document.getElementById("inputPassworda");
            var today = new Date();

            var timeDiff = Math.abs(today.getTime() - date.getTime());
            var a = Math.ceil(timeDiff / (1000 * 3600 * 24)) / 365;
            
            var age = new Date(a);
            var year=age.getYear();
            var month=age.getMonth();
            
            a=a.toFixed(2);
            var y=Math.floor(a);
            document.getElementById("inputPassword").value = y.toString();

            m=(a-y)*10;
            m=m.toFixed(2);
            m=Math.ceil(m);
            document.getElementById("inputPassworda").value = m.toString();

            
        }


 </script>

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
