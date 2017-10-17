<?php
//session_start();
if(isset($_SESSION['UserID'])){
    header("Location:./404.html");}else {
?>       
<html>
    <head>
        <meta charset="UTF-8">
        <title>Forgot Password</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="./css/materialize.css">
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <!--AJAX Cheking Email in DB-->
        <link href="./iconfont/material-icons.css" rel="stylesheet">
              
    </head>
    <body>
        <?php include './header.php'; ?>
        
        <br><br>
        <div class="container" style="height: 325px;width: 70%;margin-left: 25%;margin-right: 25%">
            <div class="col s12 m12 ">
                <div class="row">
                    <div class="col s12">
                        <h4>Forgot Password?</h4>
                    </div>
                    <br>
                    
                    <div class="input-field col s4">    
                        <select id="mySelect" onChange="check(this);">
                            <option disabled selected>Choose Recovery option</option>
                            <option class="blue-text">Email</option>
                            <option>Mobile OTP</option>
                            <!--<option>Misscall PIN</option>-->
                        </select>
                        <label for="db" style="font-size: 1em;">Choose Option</label>
                    </div>
                    
                    
                    <div class="input-field col s4">   
                        <div id="other-div1" style="display:none;">
                            <form name="retrieve_form" action="logic.php?value=retrieve" method="POST">
                                <input type="email" name="txtemail" id="txtemail" onchange="chkmail()"   required autocomplete="off" />                                 
                                <label for="txtaddress2">Enter Registered Email</label>
                                <span id="erremail" class="red-text"></span><br>
                                <br><input type="submit" name="submitbtn" id="submitbtn" class="btn red" value="Submit" disabled="true"/> 
                            </form>
                        </div>

                        <div id="other-div2" style="display:none;">
                            <form action="logic.php?value=motp" method="POST">
                                <input type="text"  name="no" id="no" onchange="chkmobile()"  oninput="if(this.value.length > 10) {this.value = this.value.slice(0,10);}" />
                                <label for="txtaddress2">Enter Registered Mobile No. </label>
                                <span id="errmotp" class="red-text"></span>                               
                                <br><br> 
                                <input type="submit" name="submitbtn2" id="submitbtn2" class="btn red" value="Submit" disabled="true"/>                              
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <?php include './footer.php'; ?>
    </body>
    <script type="text/javascript">  
        
        //...Initialization of select list
        $(document).ready(function () {
            $('select').material_select();
        });
        
        //....to see which option is selected.....
        function check(elem) {
                // use one of possible conditions
                // if (elem.value == 'Other')
                if (elem.selectedIndex == 1) {
                    document.getElementById("other-div1").style.display = 'block';
                } else {
                    document.getElementById("other-div1").style.display = 'none';
                }
                if (elem.selectedIndex == 2 ) {
                    document.getElementById("other-div2").style.display = 'block';
                } else {
                    document.getElementById("other-div2").style.display = 'none';
                }
            }
            
            
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
                    document.getElementById("submitbtn").disabled = !btn()
                }
                xmlhttp.send();
            }
            
            
            function btn()
            {
                return document.getElementById("erremail").valid;
            }



         function chkmobile()
            {
                var xmlhttp = new XMLHttpRequest();
                var mobile = document.getElementById("no").value;
                xmlhttp.open("GET", "checkdata.php?mobile=" + mobile, true);

                xmlhttp.onreadystatechange = function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        var mydiv = document.getElementById("errmotp");
                        var response = xmlhttp.responseText.split("||");
                        mydiv.innerHTML = response[0];
                        mydiv.valid = response[1];
                    }
                    document.getElementById("submitbtn2").disabled = !btnmotp()
                }
                xmlhttp.send();
            }

            function btnmotp()
            {
                return document.getElementById("errmotp").valid;
            }
        
        
    </script>
        </html><?php }?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

