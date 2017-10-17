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
<!--        <link rel="stylesheet" href="./css/materialize.min.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
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
            <h6 class="black-text" style="font-size: 130%"><a href="#" onclick="Everify()">Click here</a> to verify your email!!</h6>
            
            <br/>
            <div class="row center" style="width: 100%">
                <div class="input-field col s10">   
                    <div id="other-div1" style="display:none;">
                            <input type="text" name="code" id="code" required autocomplete="off" />                                 
                            <label for="txtcode">Enter code</label>
                            <span id="erremail" class="red-text"></span><br>
                            <br><input type="submit" name="submitverify" id="submitverify" class="btn red" onclick="Onclick()" value="Submit"/>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include './footer.php';
            ?>
        <script>
            function Everify()
            {
                 var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("GET", "logic.php?value=everify", true);

                xmlhttp.onreadystatechange = function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        return true;
                    }
                }
                xmlhttp.send();
                
                    document.getElementById("other-div1").style.display = 'block';
                Materialize.toast("Verification email sent to your inbox.",4000);
            }
            function Onclick()
            {
               var xmlhttp = new XMLHttpRequest();
               var code = $("#code").val();
               xmlhttp.open("POST","logic.php?value=verified", true);
               xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
               xmlhttp.onreadystatechange = function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        var response = (xmlhttp.responseText).trim();
                        if(response == "Done")
                            {
                                Materialize.toast("Verification Done!!", 2000);
                                
                            }
                            else if(response == "empty")
                            {
                                Materialize.toast("Enter code!!", 2000);
                            }
                            else if(response == "not done")
                            {
                                Materialize.toast("Not Verified", 2000);
                            }
                            else
                            {
                                Materialize.toast("Database Error", 2000);
                            }
                    }
                }
                xmlhttp.send("code=" + code);
            }
            
            
        </script>
    </body>
</html>
