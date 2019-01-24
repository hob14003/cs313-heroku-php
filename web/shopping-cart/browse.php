<?php session_start(); ?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
        

        <?php
        // update the session
        include "view-cart.php";
        ?>




    </head>
    <body>
<!-- adds the navigation bar -->
    <?php include "populate.php" ?>

    <div class="container">
        <h1>Browse</h1>
    </div>

        <div class="container">
         <form action="browse.php" method="post">
             <?php include "storage.php";      
             
                foreach($skateboardDeck as $deck)
                {
                echo "<input type=\"checkbox\" name=\"purchasedItems[]\" value=\"$deck skate deck\"> $deck <br>";
                }
             ?>
              <input type="submit" value="Add Items to Cart">
         </form>
        </div>

    </body>
</html>