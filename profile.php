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
/*            .main
            {
                width: 100%;
                height: auto;
                background-image: url(images/mount.png);
                background-repeat: no-repeat;
                background-size: cover;
                padding-top: 7%;
                padding-bottom: 7%;
                margin: 0px;
            }*/
            .cont
            {
                width: 90%;
                height: auto;
                margin: 5%;
                margin-bottom: 2%;
                background-color: white;
                opacity: 0.9;
                padding: 3%;
            }
        </style>
    </head>
    <body onload="getData()">
        <?php
        // put your code here
        include './header.php';
        ?>
        
            <div class="cont z-depth-5 hoverable">
                <div class="col s12" style="padding-left: 3%">
                    <h5 class="indigo-text darken-3"><b>Primary Information</b></h5>
                    <div class="divider"></div>
                    <br>
                    <h5 style="font-size: 110%">First Name : <b style="margin-left: 7%"><?php echo $_SESSION['FirstName'];?></b></h5><br>
                    <h5 style="font-size: 110%">Last Name :  <b style="margin-left: 7%"><?php echo $_SESSION['LastName'];?></b></h5><br>
                    <h5 style="font-size: 110%">Email ID : <b style="margin-left: 8%"><?php echo $_SESSION['Email'];?></b></h5><br>
                    <h5 style="font-size: 110%">Mobile No : <b id="mobile" style="margin-left: 7%"></b></h5><br>
                    <h5 style="font-size: 110%">Address : <b id="address" style="margin-left: 8%"></b></h5><br>
                    
                    <div class="row">
                            <center>
                                <button class="waves-effect waves-light indigo darken-4 btn " id='editProfile' onclick="" type="button" style="font-size: 120%">Edit Profile
                                </button>
                            </center>
                        </div>
                </div>
                
                
            </div>   <!--contain div tag ended-->
            
        <?php
        // put your code here
        include './footer.php';
        ?>
            
        <script type="text/javascript">
            function getData()
            {
                var xmlhttp = new XMLHttpRequest();
                  xmlhttp.open("POST", "logic.php", true);

                  //Send the proper header information along with the request
                      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                  xmlhttp.onreadystatechange = function ()
                  {
                      if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                      {
                          var m = document.getElementById("mobile");
                          var a = document.getElementById("address");
                         var response = xmlhttp.responseText.split("||");
                            m.innerHTML = response[0];
                            a.innerHTML = response[1];
                      }
                      //$(".main_disp").html(jsonResponse);
                  }
                  xmlhttp.send("page=profile");
            }
        </script>
    </body>
</html>
<?php } ?>