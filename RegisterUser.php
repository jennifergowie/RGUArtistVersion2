<?php

session_start(); // Start Session

include("dbConnect.php");    //Establish database connection

$username=$_POST["MatriculationNumber"]; //Get username that has been entered
$emailAddress=$_POST["FirstName"]; //Get email address that has been entered
$password=$_POST["Surname"]; //Get password that has been entered
$mobileNumber=$_POST["course"]; //Get mobile number that has been entered

$sql = "INSERT INTO users (MatriculationNumber, FirstName, Surname, Class) VALUES ('".$username."','".$emailAddress."','".$password."', '".$mobileNumber."')";
$link->query($sql);

echo $username;
echo $emailAddress;
echo $password;
echo $mobileNumber;