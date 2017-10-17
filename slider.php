 <!DOCTYPE html>
  <html>
    <head>
<!--      Import Google Icon Font-->      
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        
        <!-- -----------------------------slider-------------------------------- -->
        <div class="slider">
    <ul class="slides">
        <li>
            <img src="images/tag.jpg" style="background-size: cover"> <!-- random image -->
        </li>
      
      
      <li>
          <img src="images/header.png" style="background-size: 100% 100%"> <!-- random image -->
<!--        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>-->
      </li>
      
      
      
      <li>
          <img src="images/kitty.jpg" style="background-size: 100% 100%">> <!-- random image -->
          <div class="caption left-align">
             
              <h1 style="font-size: 5em">Eat.<br>Love.<br>Craft.</h1>
          <!--<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>-->
        </div>
      </li>
      
      
      
      <li>
          <img src="images/camera.jpg" style="background-size: 100% 100%">> <!-- random image -->
          <div class="caption right-align black-text" style="margin-left: 4em">
              <br><br><br>
          <h1 style="font-size: 5em">Capture<br>the<br>moments.</h1>
          <!--<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>-->
        </div>
      </li>
      
      
      
      <li>
          <img src="images/hangings.jpg"> <!-- random image -->
        <div class="caption right-align black-text" style="margin-left: 5em">
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
            <h2><b>Let's be innovative.</b></h2>
        </div>
      </li>
      
      
      
      <li>
          <img src="images/heart.jpg" style="background-size: cover">  <!-- random image -->
        <div class="caption left-align">
            <br><br>
          <h1 style="font-size: 4.5em">Do<br><br>Creative</h1>
          <!--<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>-->
        </div>
          <div class="caption right-align" style="margin-left: 5em">
              <br><br>
          <h1 style="font-size: 4.5em">Something<br><br>Everyday.</h1>
          <!--<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>-->
        </div>
      </li>
      
      
      
    </ul>
  </div>
        
<!--      Import jQuery before materialize.js
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>-->
      
      <script type="text/javascript">
          //jquery initialization
          
       $(document).ready(function(){
      $('.slider').slider({
          indicators: false,
          height: 550,
          interval: 4000
      });
      //$('.slider').height(400);
    });
        
   
      // Pause slider
$('.slider').slider('pause');
// Start slider
$('.slider').slider('start');
// Next slide
$('.slider').slider('next');
// Previous slide
$('.slider').slider('prev');
      </script>
    </body>
  </html>
        