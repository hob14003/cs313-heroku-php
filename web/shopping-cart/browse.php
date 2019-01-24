<?php session_start(); ?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
        

        <?php
        // update the session
        include "update-session.php";
        ?>




    </head>
    <body>
<!-- adds the navigation bar -->
    <?php include "populate.php" ?>

    <div class="buffer"> </div>

    <div class="container">
        <h1>We sell Skateboard decks</h1>
    </div>

        <div class="container">
         <form action="browse.php" method="post">
             <?php include "storage.php";      
             
                foreach($skateboardDeck as $deck)
                {
                    echo "<div>";
                echo "<input type=\"checkbox\" name=\"purchasedItems[]\" value=\"$deck skate deck\"> $deck skate deck <br>";
                    echo "</div>";
                }
             ?>
              <input type="submit" value="Add Items to Cart">
         </form>
        </div>

    </body>
</html>