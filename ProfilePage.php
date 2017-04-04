<?php
session_start(); // Start Session
include("dbConnect.php");

$sql = "SELECT * FROM userprofiles WHERE MatriculationNumber = '".$MatriculationNumber."'"; //Setup SQL query to get password from username
$results =$link->query($sql);
{
    $MatricNumber=$results['MatriculationNumber'];
    $FirstName=$results['FirstName'];
    $Surname=$results['Surname'];
    $Email=$results['Email'];
    $picture=$results['picture'];
    $Course=$results['Class'];
    $PersonalProfile=$results['PersonalProfile'];
    $Inspirations=$results['Inspirations'];
}
?>

<html>
<table width="398" border="0" align="center" cellpadding="0">
    <tr>
        <td height="26" colspan="2">Your Profile Information </td>
        <td><div align="right"><a href="logout.php">logout</a></div></td>
    </tr>
    <tr>
        <td width="129" rowspan="5"><img src="<?php echo $picture ?>" width="129" height="129" alt="no image found"/></td>
        <td width="82" valign="top"><div align="left">FirstName:</div></td>
        <td width="165" valign="top"><?php echo $FirstName ?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">Surname:</div></td>
        <td valign="top"><?php echo $Surname ?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">Email:</div></td>
        <td valign="top"><?php echo $Email ?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">Course:</div></td>
        <td valign="top"><?php echo $Course ?></td>
    </tr>
    <tr>
        <td valign="top"><div align="left">Personal Profile: </div></td>
        <td valign="top"><?php echo $PersonalProfile ?></td>
    </tr>

    <tr>
        <td valign="top"><div align="left">Inspirations: </div></td>
        <td valign="top"><?php echo $PersonalProfile ?></td>
    </tr>
</table>

</html>