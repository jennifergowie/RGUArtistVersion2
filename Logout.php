<?php
    session_start();
    session_unset();
    session_destroy();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">
</head>

<body>
    <main>
        <div class="logOutBg">
            <br/>
            <img style="vertical-align: top; display: inline; height: 75px; width: 300px" src="Resources/Images/Robert_Gordon_University.png" alt="Logo"><br/>
            <br/>


    <div style="text-align: center">
    <h2>Thankyou for using RGUArtist</h2>
    <span>Click to <a href="login.php">login</a> again</span>
</div>
    <?php
    include("Resources/HeaderandFooterSections/RGUArtistFooterSection.php");
    ?>
    </main>
</body>

</html>