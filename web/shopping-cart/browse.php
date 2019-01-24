<?php session_start(); ?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
<!-- adds the navigation bar -->
    <?php include "populate.php" ?>

    <div class="container">
        <h1>Browse</h1>
    </div>

        <div class="container">
         
             <?php include "storage.php";      
             
                foreach($skateboardDeck as $deck)
                {
               
                echo "<div class=\"saleItems\"> <p> $deck </p> <button id=\"$deck\" value=\"Add One\"> </div>";

                }
             ?>
        </div>

        
    </body>
</html>