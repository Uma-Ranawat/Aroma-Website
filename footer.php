 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    </head>

    <body>
        
        <!-- -----------------------------FOOTER-------------------------------- -->
        <br><br>
             
        <div>
            <img src="images/f4.JPG" class="responsive-img" style="margin-left: 15%;margin-right: 15%;width: 70%; height: 6em"/>
        </div>
        <br/><br>
        <div>
            <img src="images/footerbg.JPG" class="responsive-img" />
        </div>
        
        <br>
        <!--...................DIVIDER LINE..............-->
        <div class="divider blue z-depth-3" style="height: 1px; width: 80%; margin-left: 10%">
        </div>
        
        
        <footer class="page-footer white" style="margin-top: 0px;font-size: larger">
          <div class="container">
            <div class="row">
              <div class="col s3">
                <h5 class="black-text text-darken-3">Aroma Creations</h5>
                <p class="grey-text text-darken-1"><b>Aroma Creations provides quality products to all customers.</b></p>
              </div>
                
              <div class="col s3">
                <h5 class="black-text">Account</h5>
                <ul>
                    <li><a class="grey-text text-darken-1" href="signup.php"><b>Sign Up</b></a></li>
                    <li><a class="modal-trigger grey-text text-darken-1" href="#flogin"><b>Login</b></a></li>
                </ul>
              </div>
              
                <div class="col s3">
                <h5 class="black-text">Inquiry</h5>
                <ul>
                    <li><a class="grey-text text-darken-1" href="about.php"><b>About Us</b></a></li>
                    <li><a class="grey-text text-darken-1" href="contact.php"><b>Contact Us</b></a></li>
                </ul>
              </div>
                
                <div class="col s3">
                <h5 class="black-text">Contacts</h5>
                <ul>
                    <li><a href="#" class="grey-text text-darken-1" style="pointer-events: none;cursor: default"><i class="material-icons">location_on</i><b>Rajmahal,Vadodara Gujarat</b></a></li>
                    <li><a href="#" class="grey-text text-darken-1" style="pointer-events: none;cursor: default"><i class="material-icons">ring_volume</i><b> 1800-10-100 </b><i class="material-icons">email</i></a></li>
                  
                </ul>
              </div>
              
            </div>
          </div>
            
            <!--...................DIVIDER LINE..............-->
            <div class="divider blue z-depth-3" style="height: 1px">
            </div>
            <br>
            
            <div class="footer-copyright" style="background-color: #1a237e;">
            <div class="container">
            © 2017 Copyright Aroma Creations. All Rights Reserved.
            
            
            
            <a class=" grey-text text-lighten-4 right " href="privacy.php">&nbsp;&nbsp;Privacy Policy</a>
            
            <a class=" grey-text text-lighten-4 right " href="termsAndConditions.php">Terms and Conditions  |</a>
            
            </div>
          </div>
        </footer>
        
        
<!-- Modal Structure -->
        <div id="flogin" class="modal" style=" max-height: 390px; max-width: 450px; overflow-y: hidden;">
            <div class="modal-content" style="margin-top: -20px;">
                <div class="row section">
                    <center><h4 class="modal-trigger indigo-text darken-4 ">Login</h4></center>
                    <div class="row divider"></div>

                    <div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="femail"  name="txtemail_mobile" type="text"  autofocus required>
                                <label for="user-email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="fpwd" name="txtpassword" type="password" required>
                                <label for="user-password">Password</label>
                            </div>
                            <div class="col s12">
                                <span id='ferr' class="red-text" hidden>
                                </span>
                                <a href="forgot_password.php" class="right">Forgot Password ?</a> 
                            </div>
                        </div> 
                        <div class="row">
                            <center>
                                <button class="waves-effect waves-light indigo darken-4 modal-action btn " id='flogin_sub' onclick="fsubmit_data();" type="button">Login
                                    <i class="material-icons right">send</i></button>
                            </center>
                        </div>
                        <div class="row center">
                            <span id="fmsg_usr" class="red-text">

                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--Import jQuery before materialize.js-->
<!--      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>-->

      <script type="text/javascript">
          //.....This funtion is for login.......
  function fsubmit_data()
  {
      var email = $("#flogin #femail").val();
      var pass = $("#flogin #fpwd").val();//alert(email+" "+pass);
      var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("POST", "logic.php", true);
                
                //Send the proper header information along with the request
                    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    
                xmlhttp.onreadystatechange = function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        var response = xmlhttp.responseText.trim();
                        //alert(response.length);
                        if (response == "1")
                        {
                            Materialize.toast("Welcome Admin!!", 2000);
                            setTimeout(function() {
                                    window.location = "./Admin_panel/Panel.php"; //link ur url or if possible do in logic only ok ?
                                    },2000);
                            
                        } else if (response == "2")
                        {
                            Materialize.toast("Welcome!!", 2000);
                            setTimeout(function() {
                                    window.location = "./Home.php"; //link ur url or if possible do in logic only ok ?
                                    },2000);
                        } else if (response == "3")
                        {
                            Materialize.toast("Username Or Password is Incorrect!!", 2000);
                        } 
                        else {
                            Materialize.toast("Some Error!!", 2000);
                        }
                    }
                    //$(".main_disp").html(jsonResponse);
                }
                xmlhttp.send("page=login&email=" + email + "&pass=" + pass);
  }
      </script>
      </body>
  </html> 