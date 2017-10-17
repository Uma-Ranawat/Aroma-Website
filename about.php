<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>About Us</title>
        <style type="text/css">
/*            .main
            {
                height: auto;
                width: 100%;
                background-image: url(images/butterflies1.jpg);
                background-size: 100% 100%;
                background-repeat: no-repeat;
                padding: 4%;
            }*/
            .content
            {
                margin-left: 45%;
                margin-right: 5%;
                font-size: medium
            }
            
            
        </style>
    </head>
    <body>
        <?php
          include './header.php';
        ?>
        
        
        <div class="parallax-container" style="height: auto;">
            <div class="parallax"><img src="images/Untitled-3.jpg" style="z-index: -1"></div>
            <div class="content">
            <h2 style="color: white" >About Us</h2>
            <hr>
            <p style="color: white;font-size: larger">
                <b>'Do what you love and the business will follow’ – Michael Fortin</b>
                <br><br>
                We at Aroma Creations feel that every mind is creative in some form or the other and
                that creativity in every mind needs to come out and be respected.Capital isn't so 
                important in business. Experience isn't so important. You can get both these things.
                What is important is ideas. If you have ideas, you have the main asset you need, and 
                there isn't any limit to what you can do with your business and your life.
                <br><br>
                                
                It is our vision to make the happiest of individuals because that we believe is the 
                nature of our services, to make happy customers. <br><br>
                Different types of products are easily available at our website and they all are of 
                top quality which we can provide.
                Our creativity defines us. We aim at making people happy. Our survival strategy -  
                One Happy Customer equals to 
                one happy life.
                <br><br>
                
                We are a professionally managed organization which is ardently engulfed in providing
                of all kinds of products. Last but not least, we have established long-term business
                relationship with our prestigious clients via our superlative products.
                
                <br><br>
                
                At Aroma Creations, we offer you an innovative on demand retail platform where you can
                instantly shop, create or customize products to fit your personal style and taste. We 
                bring your inborn originality to life, with our huge range of products that express you
                in your own unique way.

                <br><br>
                <i><b>Aroma Creations is a work in progress. We will keep adding new designs, brands and products
                        to make your shopping experience a memorable one!</b></i>
            </p>
            </div>
        </div>
        
        <!--<br><br><br><br><br>-->
        
        
<!--        <div class="main">
            <div class="content">
            <h2 style="color: white" >About Us</h2>
            <hr>
            <p style="color: white;font-size: larger">
                <b>'Do what you love and the business will follow’ – Michael Fortin</b>
                <br><br>
                We at Aroma Creations feel that every mind is creative in some form or the other and
                that creativity in every mind needs to come out and be respected.Capital isn't so 
                important in business. Experience isn't so important. You can get both these things.
                What is important is ideas. If you have ideas, you have the main asset you need, and 
                there isn't any limit to what you can do with your business and your life.
                <br><br>
                                
                It is our vision to make the happiest of individuals because that we believe is the 
                nature of our services, to make happy customers. <br><br>
                Different types of products are easily available at our website and they all are of 
                top quality which we can provide.
                Our creativity defines us. We aim at making people happy. Our survival strategy -  
                One Happy Customer equals to 
                one happy life.
                <br><br>
                
                We are a professionally managed organization which is ardently engulfed in providing
                of all kinds of products. Last but not least, we have established long-term business
                relationship with our prestigious clients via our superlative products.
            </p>
            </div>
        </div>-->
        
        
        <?php
          include './footer.php';
        ?>
<!--        
        Import jQuery before materialize.js
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>-->
      
      <script type="text/javascript">
          $(document).ready(function(){
      $('.parallax').parallax();
      
    });
    
    
      </script>
    </body>
</html>
