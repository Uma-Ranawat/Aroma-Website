<!DOCTYPE html>
<html>
    <head>
        
        <title>Sign Up</title>
        <!--<link rel="stylesheet" href="./css/materialize.css" />-->
        <link rel="stylesheet" href="./css/materialize.min.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="./iconfont/material-icons.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style type="text/css">
            .main
            {
                width: 100%;
                height: auto;
                background-image: url(images/Background.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                padding-top: 7%;
                padding-bottom: 7%;
                margin: 0px;
            }
            .cont
            {
                width: 40%;
                height: auto;
                margin-left: 30%;
                background-color: white;
                padding: 3%;
            }
            /* invalid color */
            .input-field input[type=text].invalid {
              border-bottom: 1px solid #000;
              box-shadow: 0 1px 0 0 #000;
            }
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
            }
        </style>
    </head>
    <body>
        <?php
            include './header.php';
        ?>
        <div class="main">
            <div class="cont z-depth-5 hoverable">
                   
                    
                <div class="col s12">
                    <h3 class="indigo-text darken-3 center-align"><b>Create An Account</b></h3>
                    <div class="divider"></div><br>
                    <span class="red-text left" style="font-size: large">(* Marks Field Are Mandatory To Fill)</span>
                    <br>
                </div>
                
                <br>
                
                <!--................FIRST NAME....................-->
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="first_name" name="fname" type="text" class="validate" style="font-size: large" onblur="checkName(this.id,this.value)" onkeyup="var a = this.value;if (isNaN(a.substr(-1)) || a.substr(-1)==' ') {
                                } else {
                                    this.value = a.slice(0, -1);
                                    Materialize.toast('Characters Only Acceptable !!', 2000);
                                }; check()" required>
                        <label for="first_name" style="font-size: large">First Name <span class="red-text">*</span></label>
                    </div>
                </div>
                
                <!--................lAST NAME....................-->
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="last_name" type="text" name="lname" class="validate" style="font-size: large" onblur="checkName(this.id,this.value)" onkeyup="var a = this.value;if (isNaN(a.substr(-1)) || a.substr(-1)==' ') {
                            } else {
                                this.value = a.slice(0, -1); 
                                Materialize.toast('Characters Only Acceptable !!', 2000);
                            }; check()" required>
                    <label for="last_name" style="font-size: large">Last Name <span class="red-text">*</span></label>
                </div>
            </div>
                
                <!--................EMAIL....................-->
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input id="rg_email" onblur="ValidateEmail(this.value); check_mail()" onkeyup="check()" type="email" name="email" style="font-size: large" class="validate" required>
                        <label for="rg_email" style="font-size: large">Email <span class="red-text">*</span></label>
                    </div>
                </div>
                    
                    <!--................PASSWORD....................-->
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">vpn_key</i>
                            <input id="password" type="password" name="password" onblur="CheckPassword(this) " onkeyup="check()" style="font-size: large" class="validate" required>
                            <label for="password" style="font-size: large">Password<span class="red-text">*</span></label>
                        </div>
                    </div>
                    
                  <!--................REGISTER BUTTON....................-->
                    <div class="row">
                        <div class="input-field col s12 offset-s4">
                            <input type="Submit"  class="btn disabled" style="font-size: large" onclick="register()" value="Register" id="rgsubmitbtn" />
                        </div>
                    </div>
                
            </div>   <!--contain div tag ended-->
            
        </div>    <!--main div tag ended-->
        
        
        <?php
            include './footer.php';
        ?>
<!--        
        <script type="text/javascript" src="./js/jquery-3.0.0.js"></script>
        <script type="text/javascript" src="./js/materialize.js"></script>
        <script type="text/javascript" src="./js/materialize.min.js"></script>-->
        
        <script type="text/javascript">

//....validation for name fields......
    function checkName(id,val)
    {
        if(val.match(/^[A-Z ]+$/i))
        {
            if(val.length >= 3)
            {
                return true;
            }
            else
            {
                if(val.length !=0)
                {
                    if(id == "first_name")
                    {
                        $('#first_name').addClass("invalid");
                    }
                    else if(id == "last_name")
                    {
                        $('#last_name').addClass("invalid");
                    }
                    Materialize.toast('Names cannot have less than 3 characters', 3000); 
                }
                return false;
            }
        }
        else
        {
            if(val.length !=0 )
                {
                    if(id == "first_name")
                    {
                        $('#first_name').addClass("invalid");
                    }
                    else if(id == "last_name")
                    {
                        $('#last_name').addClass("invalid");
                    }
                    Materialize.toast('Names cannot have special characters', 3000); 
                 }
            return false; 
        }
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


        function check_mail() //this function is for check mail is already exist or not ?
            {
                var mail = $("#rg_email").val();// $("#rg_email") it is jquery which was used against javascript 
                                                // document.getElementById('rg_email').value = $('#rg_email').val()
                                                // $() use for reference || # is used for "id"
                if(mail.length !=0)
                {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.open("POST", "logic.php", true);
                    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    
                    xmlhttp.onreadystatechange = function ()
                    {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                            var response = (xmlhttp.responseText).trim();//alert(response);
                            if (response == "1")
                            {
                                $("#rg_email").addClass("invalid");
                                $("#rgsubmitbtn").addClass("disabled");
                                Materialize.toast("Email Already Exist !!", 2000);
                            } 
                            else if (response == "0")
                            {
                                
                                    $("#rg_email").addClass("valid");
                                    var f=$('#first_name').val();
                                    var l=$('#last_name').val();
                                    var p= $('#password').val();
                                if ((f==null || f=="")||(l==null || l=="")||(mail==null || mail=="")||(p==null || p==""))
                                  {
                                      $('#rgsubmitbtn').addClass("disabled");
                                  }
                                  else
                                  {
                                      $('#rgsubmitbtn').removeClass("disabled");
                                   }
                            }
                        }
                    }
                    
                    xmlhttp.send("page=check_mail&mail=" + mail);
                }
                else
                {
                    $('#rg_email').removeClass("invalid");
                    $('#rg_email').removeClass("valid");
                }
       }
            

    //....This function enables the register button only when all fields are filled.....    
    function check()
    {
            var f=$('#first_name').val();
            var l=$('#last_name').val();
            var e=$('#rg_email').val();
            var p= $('#password').val();
                               
        if ((f==null || f=="")||(l==null || l=="")||(e==null || e=="")||(p==null || p==""))
          {
              $('#rgsubmitbtn').addClass("disabled");
          }
          else if(e!=null||e!="")
          {
             var xmlhttp = new XMLHttpRequest();
                    xmlhttp.open("POST", "logic.php", true);
                    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    
                    xmlhttp.onreadystatechange = function ()
                    {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                            var response = (xmlhttp.responseText).trim();//alert(response);
                            if (response == "1")
                            {
                                $("#rgsubmitbtn").addClass("disabled");
                            } 
                            else if (response == "0")
                            {
                                    $('#rgsubmitbtn').removeClass("disabled");
                                
                            }
                        }
                    }
                    
                    xmlhttp.send("page=check_mail&mail=" + e);
           }
   }
   
   
      
   //.....register button.....
   function register()
   {
        var f=$('#first_name').val();
        var l=$('#last_name').val();
        var e=$('#rg_email').val();
        var p= $('#password').val();
        

        
       if (!checkName($('#first_name'),f)) 
       {
           //Materialize.toast('Invalid first name', 2000);
       } 
       else if(!checkName($('#last_name'),l)) 
       { 
            //Materialize.toast('Invalid last name', 2000);
       }
       else if(!ValidateEmail(e))
       {
       }
       else if(!p.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/))
       {
           Materialize.toast('Password must be between 8 to 15 characters which<br> contain at least one lowercase letter, one uppercase<br> letter, one numeric digit, and one special character', 3000); 
       }
       else
       {

           var xmlhttp = new XMLHttpRequest();
                    xmlhttp.open("POST", "logic.php", true);
                    
                    //Send the proper header information along with the request
                    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    
                    xmlhttp.onreadystatechange = function (){ //Call a function when the state changes.
                        
                        
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                            
                            var response = (xmlhttp.responseText).trim();
                            if (response == "1")
                            {
                                Materialize.toast("Registration Successful !!", 2000);
                                setTimeout(function() {
                                    window.location.href='./successful.php';
                                    },2000);
                                
                            } else if (response == "0")
                            {
                                Materialize.toast("Registration Failed !!", 2000);
                            }
                        }
                    }
                        
           xmlhttp.send("page=signup&fn=" + f + "&ln=" + l + "&ps=" + p + "&mail=" + e);
       }
   }
   
        </script>
    </body>
</html>
