<?php
session_start();
include("student_login.php");

if(!isset($_SESSION["username"])) {
header("Location: ../home.php");
exit(); }
?>