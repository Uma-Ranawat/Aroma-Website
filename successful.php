<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome User</title>
        <link rel="stylesheet" href="./css/materialize.css" />
        <link rel="stylesheet" href="./css/materialize.min.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--        <link href="./iconfont/material-icons.css" rel="stylesheet">-->
        <style type="text/css">
/*    .main
    {
        width: 100%;
        height: auto;
        background-image: url(images/term.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        padding: 7%;
        margin: 0px;
    }*/
    .cont
    {
        width: 80%;
        height: auto;
        background-color: white;
        padding: 3%;
        margin-left: 10%;
    }
    p
    {
        font-size: large
    }
</style>
    </head>
    <body>
        <?php
            include './header.php';
        ?>
        <div class="cont">
            <h3 class="indigo-text darken-3 center-align"><b>Welcome to Aroma Creations</b></h3>
            <br>
            <div class="divider"></div>
            <h4 class="indigo-text darken-3"><b>You have been successfully registered.</b></h4><br>
            <h5 class="indigo-text darken-3">Your user details are:</h5>
                    
            <p>
                User ID: <?php echo $_SESSION['UserID'];?><br>
                First Name: <?php echo $_SESSION['FirstName'];?><br>
                Last Name: <?php echo $_SESSION['LastName'];?><br>
                Registered email: <?php echo $_SESSION['Email'];?><br>
            </p>   
        </div>
        <?php
            include './footer.php';
        ?>
    </body>
</html>
