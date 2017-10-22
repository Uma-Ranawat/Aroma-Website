 <?php
 session_start();
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
      <!--<link href="https://fonts.googleapis.com/css?family=Pragati+Narrow" rel="stylesheet">-->
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.css" media="screen,projection"/>
      
      
      <!--Import animate.css-->
      <link type="text/css" rel="stylesheet" href="../css/animate.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">
       body{
        font-family: 'Kalam', cursive;
        }
        header, main, footer {
      padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
    }
      </style>
    </head>

    <body
        <header>
            <div class="navbar-fixed">
                <nav class="top-nav">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo center" style="font-size: 180%;">Welcome Administator</a>
              <a href="#" data-activates="slide-out" class="button-collapse" style="margin-left: 0px"><i class="material-icons">menu</i></a>
              <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="" style="font-size: 165%">Aroma Creations</a></li>
                <li><a href="" style="font-size: 125%">Home</a></li>
              </ul>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a href="" style="font-size: 125%">Logout</a></li>
              </ul>

              </div>
                </nav> 
            </div>
            <!--..............SIDENAV.............-->
            
            <div class="hide-on-med-and-up">
                <ul id="slide-out" class="side-nav" style="width: 60%">
                   <ul class="collapsible collapsible-accordion">
                     <li>
                       <a class="collapsible-header blue-text">CATEGORY<i class="material-icons">arrow_drop_down</i></a>
                       <div class="collapsible-body">
                         <ul>
                           <li><a href="#!" class="black-text">View & Add</a></li>
                           <li><a href="#!" class="black-text">Update & Delete</a></li>
                         </ul>
                       </div>
                     </li>
                     <li><div class="divider"></div></li>
                     <li>
                         <a class="collapsible-header blue-text">PRODUCTS<i class="material-icons">arrow_drop_down</i></a>
                       <div class="collapsible-body">
                         <ul>
                           <li><a href="#!" class="black-text">View & Add</a></li>
                           <li><a href="#!" class="black-text">Update & Delete</a></li>
                         </ul>
                       </div>
                     </li>
                     <li><div class="divider"></div></li>
                     <li>
                         <a class="collapsible-header blue-text">STOCK<i class="material-icons">arrow_drop_down</i></a>
                       <div class="collapsible-body">
                         <ul>
                           <li><a href="#!" class="black-text">View & Add</a></li>
                           <li><a href="#!" class="black-text">Update & Delete</a></li>
                         </ul>
                       </div>
                     </li>
                     <li><div class="divider"></div></li>
                     <li>
                         <a class="collapsible-header blue-text">ORDERS<i class="material-icons">arrow_drop_down</i></a>
                       <div class="collapsible-body">
                         <ul>
                           <li><a href="#!" class="black-text">View Orders</a></li>
                         </ul>
                       </div>
                     </li>
                     <li><div class="divider"></div></li>
                     <li><a href="#!" class="blue-text" style="margin-left: 20%">SEARCH</a></li>
                     <li><div class="divider"></div></li>
                     <li><a href="#!" class="blue-text" style="margin-left: 20%">LOGOUT</a></li>
               </ul>
                </ul>
            </div>
            
            <div class="hide-on-med-and-down">
                <ul class="side-nav fixed" style="margin-top:65px;width: 22%">
                   <ul class="collapsible collapsible-accordion">
                     <li>
                       <a class="collapsible-header blue-text">CATEGORY<i class="material-icons">arrow_drop_down</i></a>
                       <div class="collapsible-body">
                         <ul>
                           <li><a href="#!" class="black-text">View & Add</a></li>
                           <li><a href="#!" class="black-text">Update & Delete</a></li>
                         </ul>
                       </div>
                     </li>
                     <li><div class="divider"></div></li>
                     <li>
                         <a class="collapsible-header blue-text" class="blue-text">PRODUCTS<i class="material-icons">arrow_drop_down</i></a>
                       <div class="collapsible-body">
                         <ul>
                           <li><a href="#!" class="black-text">View & Add</a></li>
                           <li><a href="#!" class="black-text">Update & Delete</a></li>
                         </ul>
                       </div>
                     </li>
                     <li><div class="divider"></div></li>
                     <li>
                         <a class="collapsible-header blue-text">STOCK<i class="material-icons">arrow_drop_down</i></a>
                       <div class="collapsible-body">
                         <ul>
                           <li><a href="#!" class="black-text">View & Add</a></li>
                           <li><a href="#!" class="black-text">Update & Delete</a></li>
                         </ul>
                       </div>
                     </li>
                     <li><div class="divider"></div></li>
                     <li>
                         <a class=" collapsible-header blue-text">ORDERS<i class="material-icons">arrow_drop_down</i></a>
                         <div class="collapsible-body">
                         <ul>
                           <li><a href="#!" class="black-text">View Orders</a></li>
                         </ul>
                          </div>
                     </li>
                     <li><div class="divider"></div></li>
                     <li><a href="#!" class="blue-text" style="margin-left: 13%">SEARCH</a></li>
                     <li><div class="divider"></div></li>
                    </ul>
                </ul>
            </div>           
            
        </header>  
                
      
          
    
        
         <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      
      <script type="text/javascript">
         //..........SIDENAV BAR.......
          
          $(".button-collapse").sideNav();
          
//  // Hide sideNav
//  $('.button-collapse').sideNav('hide');
//  // Show sideNav
//  $('.button-collapse').sideNav('show');
//  // Destroy sideNav
//  $('.button-collapse').sideNav('destroy');
  
    
            </script>

    </body>
  </html>