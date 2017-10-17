<?php
session_start();
if(isset($_SESSION['UserID']))
    {    header("Location:./404.html");} 
    else{
error_reporting(E_ERROR | E_PARSE);
$reqType = $_GET['type'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Account Recovery</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="./css/materialize.css">
        <!--Import Google Icon Font-->
        <link href="./iconfont/material-icons.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <style type="text/css">
                body {
/*                        display: flex;
                        min-height: 100vh;
                        flex-direction: column;*/
                    }
                main {
/*                        flex: 1 0 auto;*/
                    }
                    i.is {font-size: 1.5em;}
                    
                    .input-field input[type=email].invalid {
             border-bottom: 1px solid red;
             box-shadow: 0 1px 0 0 #000;
           }
            .input-field input[type=password].invalid {
             border-bottom: 1px solid red;
             box-shadow: 0 1px 0 0 #000;
           }
           
           /* valid color */
            .input-field input[type=email].valid {
              border-bottom: 1px solid #000;
              box-shadow: 0 1px 0 0 #000;

            </style>
        
    </head>
    
    <body onload="reqType()">
        
        <?php include './header.php'; ?>
        
                <br><br>
        <main>
            <center>
                <!--        <form name="retrieve_form" action="logic.php?value=activate" method="POST">-->
                <div class="row">
                    <div class="col s6">
                        <h4>Change Password</h4>
                        <h5 id="type"></h5>
                    </div>

                    <br>    
                    <!--.........EMAIL FIELD.........-->
                    <div class="input-field col s10" id="reemail">
                        <input  type="email" name="txtemail" id="txtemail" onblur="ValidateEmail(this.value)" onchange="chkmail()" style="width: 200px;margin-left: -501px;" required autocomplete="off">

                        <label for="txtemail" style="margin-left: 200px;">Enter Registered Email</label>    
                    </div>
                    
                    <div class="col s5">
                        <span id="erremail" class="red-text"></span>
                    </div>
                    
                    <!--...........MOBILE FIELD...........-->
                    <div class="input-field col s10" id="remobile" hidden  >
                        <input type="text"  name="no" id="no"  onchange="chkmobile()"  oninput="if(this.value.length > 10) {this.value = this.value.slice(0,10);}" class="validate"  style="width: 200px;margin-left: -501px;" pattern="(7|8|9)\d{9}" title="Enter 10 Digit Mobile No" oninput="if(this.value.length > 10) {this.value = this.value.slice(0,10);}" />
                        <label for="mobilemc" style="margin-left: 200px;">Enter Mobile No. </label>  
                    </div>
                    
                    <div class="col s5">
                        <span id="errmobile" class="red-text"></span>
                    </div>
                    
                    <!--...........NEW PASSWORD..........-->
                    <div class="input-field col s10">
                        <input id="txtpass" name="txtpass" type="password" onblur="CheckPassword(this); checkfld(this)" style="width: 200px;margin-left: -501px;">
                        <label for="password" style="margin-left: 200px;">Enter New Password</label>

                    </div>
                    <div class="col s7">
                        <span id="errpass" class="red-text"></span>
                    </div>

                    <!--............code................-->
                    <div class="input-field col s10">
                        <?php
                        if ($reqType == 'mail' || $reqType = 'motp') {
                            echo"<input id='txtcode' name='txtcode' type='text' style='width: 200px;margin-left: -501px;'>";
                            echo"<label for='code' style='margin-left: 200px;'>Enter Code</label><br>";
                            echo "<div class='input-field col s12'><input type='button' name='submitbtn' id='submitbtn' style='margin-left: -501px;' class='btn' value='Submit' onclick='codeerr()' />  </div>";
                        }
                        ?>
                    </div>

                </div>      
            </center>
        </main>
        
    <?php include './footer.php'; ?>
        <script type="text/javascript">
            
            //.........SHOW WHICH METHOD WAS CHOSEN
            function reqType() {
                var motp = 'motp';
                var mail = 'mail';
                if (<?php echo$reqType; ?> == motp) {
                    $('#reemail').slideUp();
                    $('#txtemail').removeAttr("required");
                    Materialize.toast("Code Sent To Your Mobile ", 4000);
                    $('#remobile').slideDown();
                    $('#no').attr("required", "true");
                }
                else if (<?php echo$reqType; ?> == mail) {
                    Materialize.toast("Mail Sent.Please Check Your (Inbox OR Spam )", 4000);
                }
            }
            
            

            //...to check if email exists or not......
            function chkmail()
            {
                var xmlhttp = new XMLHttpRequest();
                var mail = document.getElementById("txtemail").value;
                xmlhttp.open("GET", "checkdata.php?retrieveemail=" + mail, true);
                xmlhttp.onreadystatechange = function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        var mydiv = document.getElementById("erremail");
                        var response = xmlhttp.responseText.split("||");
                        mydiv.innerHTML = response[0];
                        mydiv.valid = response[1];
                    }
                }
                xmlhttp.send();
            }
            
            //.....function for email validation in the form 
        function ValidateEmail(inputText)  
        {  
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
            if(inputText.match(mailformat))  
            {    
                return true;  
            }  
            else  
            {    if(inputText.length !=0)
                {
                    $('#rg_email').addClass("invalid");
                    Materialize.toast('Invalid Email. Format should be abc@xyz.com', 3000);
                }
                else
                {
                    $('#rg_email').removeClass("invalid");
                    $('#rg_email').removeClass("valid");
                }
                return false;  
            }  
        } 
            
            //...to check if mobile number exists or not......
            function chkmobile()
            {
                var xmlhttp = new XMLHttpRequest();
                var mob = document.getElementById("no").value;
                xmlhttp.open("GET", "checkdata.php?mobile=" + mob, true);
                xmlhttp.onreadystatechange = function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        var mydiv = document.getElementById("errmobile");
                        var response = xmlhttp.responseText.split("||");
                        mydiv.innerHTML = response[0];
                        mydiv.valid = response[1];
                    }                }
                xmlhttp.send();
            }
            
           
            function checkfld(f)
            {
                var myfield = f;
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("GET", "checkdata.php?" + myfield.id + "=" + myfield.value, true);
                xmlhttp.onreadystatechange = function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        var divname = "err" + myfield.id.substring(3);
                        var mydiv = document.getElementById(divname);
                        var response = xmlhttp.responseText.split("||");
                        mydiv.innerHTML = response[0];
                        mydiv.valid = response[1];
                    }
                }
                xmlhttp.send();
            }
            
             //.....function for password validation in the form 
            function CheckPassword(inputtxt)   
            {   
                var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;  
                if(inputtxt.value.match(decimal))   
                {
                    return true;
                }  
                else  
                {
                    if(inputtxt.value.length != 0)   
                    {
                        $('#password').addClass("invalid");          //makes the red line appear for invalid password
                        Materialize.toast('Password must be between 8 to 15 characters which<br> contain at least one lowercase letter, one uppercase<br> letter, one numeric digit, and one special character', 3000); 
                    } 
                    return false;
                }  
            }   
            
            function codeerr()
            {
                var xmlhttp = new XMLHttpRequest();
                var code = document.getElementById("txtcode").value;
                var pass = document.getElementById("txtpass").value;
                var email = document.getElementById("txtemail").value;
                var mobile = document.getElementById("no").value;
                xmlhttp.open("POST", "logic.php?value=activate", true);
                xmlhttp.setRequestHeader("content-type", "application/x-www-form-urlencoded");
                
                if(ValidateEmail(email)==true && CheckPassword(document.getElementById("txtpass"))==true)
                {
                    if(document.getElementById("erremail").valid==true)
                    {
                    xmlhttp.onreadystatechange = function ()
                    {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                             if (xmlhttp.responseText=="1")
                             {
                                Materialize.toast("Password Changed!!",700);
    //                            setTimeout(function(){window.location="http://www.fruitkart.tk";},1000);
                                setTimeout(function() {
                                        window.location = "./Home.php"; //link ur url or if possible do in logic only ok ?
                                        },2000);
                             }
                            else if (xmlhttp.responseText==2)
                            {
                               Materialize.toast("Invalid Code!!",3000);
                            }
                             else
                            {
                               Materialize.toast(xmlhttp.responseText,3000);
                            }

                        }
                    }
                    xmlhttp.send("txtcode=" + code + "&txtemail=" + email + "&txtpass=" + pass + "&no=" + mobile);
                }
                else
                {
                    Materialize.toast("Email is not registered",3000);
                }
            }
        }
        
        </script>
        
        
    </body>
    </html>
    
    
<?php }?>


