<?php

session_start(); // Start Session

include("dbConnect.php");    //Establish database connection
echo("<p> entering registeruser.php</p>");
    $MatriculationNumber=$_POST["MatriculationNumber"];
    $FirstName =$_POST["FirstName(s)"];
    $Surname=$_POST["Surname"];
    $EmailAddress=$_POST["EmailAddress"];
    $Class=$_POST["Class"];
    $Password=$_POST["Password"];
    $ProfilePicture=$_POST["ProfilePicture"];
    echo ('connecting to database');
      $sql = "INSERT INTO userprofiles (MatriculationNumber, FirstName, Surname, EmailAddress, Class, Password, ProfilePicture)
      VALUES ('".$MatriculationNumber."','".$FirstName."','".$Surname."','".$EmailAddress."','".$Class."','".$Password."','".$ProfilePicure."')";
      $link->query($sql);
    echo ('disconnecting to database');

    echo $MatriculationNumber;
    echo $FirstName;
    echo $Surname;
    echo $EmailAddress;
    echo $Class;
    echo $Password;
    echo $ProfilePicture;
?>
