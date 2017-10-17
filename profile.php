<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if (!isset($_SESSION['UserID'])) {
    header("Location: ./Home.php");
} else {
    
    include './connection.php';
    ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
            <!--<link rel="stylesheet" href="./css/materialize.css" />-->
            <link rel="stylesheet" href="./css/materialize.min.css" />
            <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
            <link href="./iconfont/material-icons.css" rel="stylesheet">
        <title>Profile</title>
        
        <style type="text/css">
            .main
            {
                width: 100%;
                height: auto;
                background-image: url(images/mount.png);
                background-repeat: no-repeat;
                background-size: cover;
                padding-top: 7%;
                padding-bottom: 7%;
                margin: 0px;
            }
            .cont
            {
                width: 80%;
                height: auto;
                margin-left: 10%;
                margin-right: 10%;
                background-color: white;
                opacity: 0.9;
                padding: 3%;
            }
        </style>
    </head>
    <body>
        <?php
        // put your code here
        include './header.php';
        ?>
        <div class="main">
            <div class="cont z-depth-5 hoverable">
               <div class="col s12">
                    <h3 class="indigo-text darken-3 center-align"><b>Welcome, <?php echo $_SESSION['FirstName'];?></b></h3>
                    <div class="divider"></div>
                    <br>
                </div>
               
            
            
            
            
            
            </div>   <!--contain div tag ended-->
            
        </div>    <!--main div tag ended-->
        <?php
        // put your code here
        include './footer.php';
        ?>
    </body>
</html>
<?php } ?>