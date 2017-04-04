<?php

session_start(); // Start Session

if(empty($_POST) or empty($_POST["MatriculationNumber"]) or empty($_POST["Password"]))  //if post is emtpy anywhere then don't allow login
{
    destroySession();
}

include("dbConnect.php");    //Establish database connection

$MatriculationNumber=$_POST["MatriculationNumber"]; //Get username that has been entered
$password=$_POST["Password"]; //Get password that has been entered

$sql = "SELECT Password FROM userprofiles WHERE MatriculationNumber = '".$MatriculationNumber."'"; //Setup SQL query to get password from username
$userPasswordArray = $link->query($sql);  //Execute query to get username from password

$userPassword = getPasswordFromDatabaseArray($userPasswordArray); //Get password from database array

if(checkPassword($password,$userPassword)) //Check if password is correct and act accordingly
{

    $_SESSION["MatriculationNumber"]=$MatriculationNumber;
    header("location: /HomePage.php");
    exit();
}

else
{
    destroySession();

}

$link->close(); //Close  database link

function getPasswordFromDatabaseArray($dbArray) //Function to get password from database array
{

    foreach ($dbArray as $key => $val)
    {
        foreach ($val as $value)
        {
            $output= $value;
        }
    }

    return $output;

}

function checkPassword($password, $userPassword) // Function to cehck input password against password in database
{


    if($password==$userPassword)
    {
        return True;
    }

    else
    {
        return false;
    }
}


function destroySession()

{
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();

}
?>