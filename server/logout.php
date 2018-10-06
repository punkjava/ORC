<?php
header('Cache-Control','no-store, nocache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Expires: Fri, 06 Jun 1975 15:10:00 GMT');
include "student_login.php";
session_start();
/**if(session_destroy()) // Destroying All Sessions
{
unset($_SESSION['username']);
header("Location: ../index.html"); // Redirecting To Home Page
}*/

session_destroy();
unset($_SESSION['username']);

header("Location: ../index.html");
?>