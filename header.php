 <?php

session_start();
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
      <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
      <!--<link href="https://fonts.googleapis.com/css?family=Pragati+Narrow" rel="stylesheet">-->
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="./css/materialize.css"  media="screen,projection"/>
      
      
      <!--Import animate.css-->
      <link type="text/css" rel="stylesheet" href="./css/animate.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">
       body{
        font-family: 'Kalam', cursive;
        }
      </style>
    </head>

    <body>
        
        <!-- -----------------------------navbar-------------------------------- -->
        <div class="navbar-fixed" >
            <nav>
            <div class="nav-wrapper">
                <a href="Home.php" id="brandLogo" class="brand-logo animated pulse hide-on-med-and-down" >Aroma Creations</a>
                <a href="Home.php" id="brandLogo" class="brand-logo hide-on-large-only" >Aroma Creations</a>    <!--style="font-size: 2.3em"-->
              <a href="#" data-activates="mobile-demo" class="button-collapse" ><i class="material-icons">menu</i></a>
              <!--<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>-->
              
              
              <ul class="left hide-on-med-and-down">
                        <li>

                            <div class="input-field col s12">
                                <!--<label for="search" style="margin-left: 250px; margin-top: 2px"><i class="material-icons" style="color: black">search</i></label>-->
                                <input type="text" name="search" id="search" onkeyup="search(this);" onkeydown="search(this);" autocomplete="off" style="width: 320px;max-width: 350px;min-width: 300px;background-color: white;margin-top: 12px; height: 40px;border-radius: 10px 10px 0px 0px;border-bottom-left-radius: 0px;color: #00bcd4;margin-left: 250px;padding-left: 2em;font-size: larger" placeholder="Search Products"/>
                                <a href="#" class="waves-effect waves-light btn blue" style="font-size: medium"><i class="material-icons left">search</i>Search</a>
                                <div class="search-results" style="color: black;min-width: 400px; width: 400px;position: fixed;z-index: 2;background-color: white;color: black;margin-top: -18px;margin-left: 200px;border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;font-size: 15px;" id="result">
                                </div>
                            </div>

                        </li>
              </ul>
              
              <!-- Dropdown Structure ACCOUNT -->
                        <ul id='dropdown1' class='dropdown-content'>
                            <li><a href='#login' class='modal-trigger blue-text' style='font-size: larger'>Login</a></li>
                          <li class='divider'></li>
                          <li><a href='signup.php' class='blue-text' style='font-size: larger'>Sign Up</a></li>
                        </ul>
              
              
               <!-- Dropdown Structure PROFILE -->
                        <ul id='dropdown2' class='dropdown-content'>
                            <li><a href='profile.php' class='blue-text' style='font-size: larger'>Profile <i class="material-icons">portrait</i></a></li>
                          <li class='divider'></li>
                          <li><a href='orders.php' class='blue-text' style='font-size: larger'>Orders<i class="material-icons">class</i></a></li>
                          <li class='divider'></li>
                          <li><a href='logout.php' class='blue-text' style='font-size: larger'>Log out<i class="material-icons">exit_to_app</i></a></li>
                        </ul>
              
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a href="Home.php" style="font-size: larger">Home</a></li>
                <li><a href="about.php" style="font-size: larger">About Us</a></li>
                <li><a href="contact.php" style="font-size: larger">Contact</a></li>
                <?php
                        if (!isset($_SESSION['FirstName']))
                            {
                            echo"<li>
                            <!-- Dropdown Trigger -->
                            <a class='dropdown-button' href='#' data-activates='dropdown1' style='font-size: larger'>Account<i class='material-icons right'>arrow_drop_down</i></a>
                            </li>";
                        } 
                         else {
                             echo"<li>
                            <!-- Dropdown Trigger -->
                            <a class='dropdown-button' href='#' data-activates='dropdown2' style='font-size: larger'>Welcome, ".($_SESSION['FirstName'])."<i class='material-icons right'>arrow_drop_down</i></a>
                            </li>";
                             echo"<li><a href='cart.php'><i class='material-icons'>shopping_cart</i></a></li>";
                         }
                ?>
              </ul>
              
              
              
             </div>
        </nav>
    </div>
        
        <ul class="side-nav" id="mobile-demo">
                <li><a class="waves-effect blue-text" href="Home.php" style="font-size: larger"><i class="material-icons">home</i>Home</a></li>
                <li><div class="divider"></div></li>
                <li><a class="waves-effect blue-text" href="signup.php" style="font-size: larger"><i class="material-icons">input</i>Sign Up</a></li>
                <li><div class="divider"></div></li>
                <li><a class="waves-effect modal-trigger blue-text" href="#login" style="font-size: larger"><i class="material-icons">publish</i>Login</a></li>
                <li><div class="divider"></div></li>
                <li><a class="waves-effect blue-text" href="about.php" style="font-size: larger"><i class="material-icons">info</i>About Us</a></li>
                <li><div class="divider"></div></li>
                <li><a class="waves-effect blue-text" href="contact.php" style="font-size: larger"><i class="material-icons">phone</i>Contact</a></li>
                <li><div class="divider"></div></li>
                
              </ul>
        
        
        
        
        
        
        <!-- Modal Structure -->
        <div id="login" class="modal" style=" max-height: 390px; max-width: 450px; overflow-y: hidden;">
            <div class="modal-content" style="margin-top: -20px;">
                <div class="row section">
                    <center><h4 class="indigo-text darken-4 " style="font-size: x-large">Login</h4></center>
                    <div class="row divider"></div>

                    <div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email"  name="txtemail_mobile" type="text"  autofocus required>
                                <label for="user-email" style="font-size: large">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="pwd" name="txtpassword" type="password" required>
                                <label for="user-password" style="font-size: large">Password</label>
                            </div>
                            <div class="col s12">
                                <span id='err' class="red-text" hidden style="font-size: large">
                                </span>
                                <a href="forgot_password.php" class="right" style="font-size: large">Forgot Password ?</a> 
                            </div>
                        </div> 
                        <div class="row">
                            <center>
                                <button class="waves-effect waves-light indigo darken-4 modal-action btn " id='login_sub' onclick="submit_data();" type="button" style="font-size: large">Login
                                    <i class="material-icons right">send</i></button>
                            </center>
                        </div>
                        <div class="row center">
                            <span id="msg_usr" class="red-text" style="font-size: large">

                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      
      <script type="text/javascript">
          
      
         //..........DROPDOWN LIST..........
      $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: true, // Does not change width of dropdown to that of the activator....not
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );
        $('.dropdown-button').dropdown('open');
        $('.dropdown-button').dropdown('close');
        
        
        //.............LOGIN MODAL..........
        $(document).ready(function(){
            // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
        });
        
        
        //..........SIDENAV BAR.......
          
          $(".button-collapse").sideNav();
          
//  // Hide sideNav
//  $('.button-collapse').sideNav('hide');
//  // Show sideNav
//  $('.button-collapse').sideNav('show');
//  // Destroy sideNav
//  $('.button-collapse').sideNav('destroy');
  
  
  
  
  
  //.....This funtion is for login.......
  function submit_data()
  {
      var email = $("#login #email").val();
      var pass = $("#login #pwd").val();
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
  
  
        setInterval(function(){            
            $("#brandLogo").removeClass('infinite');
            setTimeout(function() {
                                   $("#brandLogo").addClass('infinite');
                                    },2000);
            
        },2500);
          </script>
    </body>
  </html>
        