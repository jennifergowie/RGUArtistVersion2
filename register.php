<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">
</head>

<body>
<main>

    <div class="newUserbg">
        <br/>
        <img style="vertical-align: top; display: inline; height: 75px; width: 300px" src="Resources/Images/Robert_Gordon_University.png" alt="Logo">
        <h2>Create New Account</h2>
        <form action="RegisterUser.php" method="post" autocomplete="off" enctype="multipart/form-data">
            <input type="matriculationNumber" name="MatriculationNumber" placeholder="Matriculation Number" onfocus="this.placeholder=''" onblur="this.placeholder='MatriculationNumber'" required/><br/>
            <input type="firstName" name="FirstName(s)" placeholder="First Name(s)" onfocus="this.placeholder=''" onblur="this.placeholder='FirstName(s)'" required/><br/>
            <input type="surname" name="Surname" placeholder="Surname" onfocus="this.placeholder=''" onblur="this.placeholder='Surname'" required/><br/>
            <input type="email" name="email" placeholder="Email Address" onfocus="this.placeholder=''" onblur="this.placeholder='Email Address'" required/><br/>
            <input type="password" name="password" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder='Password'" required/><br/>
            <input type="course" name="course" placeholder="Course Name" onfocus="this.placeholder=''" onblur="this.placeholder='Course Name'" required/><br/>
            <p>Please choose a file to upload as your profile picture: <input type="file" name="fileToUpload" id="fileToUpload"></p>
            <br>
            <input class="inputButton" type="submit" name="submit" value="Create Your Account"/>
        </form>

        <p>Already have an account? <a href="login.php">Click here</a> to login</p>

        <?php
        include("resources/HeaderandFooterSections/RGUArtistFooterSection.php");
        ?>

</main>

</body>
</html>