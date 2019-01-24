<?php session_start(); ?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
        

        <?php

       $cartItems = array();
       
       // for each purchased item sent from browse
       // add them to the cart.
       foreach($_POST["purchasedItems"] as $item)
       {
       //echo $item;
       array_push($cartItems,$item);
       }
       
       // check if there is a cart already
       // if there is
       if (array_key_exists('cartItems',$_SESSION) && !empty($_SESSION['cartItems']))
       {
           // add each new item into the session cart
           foreach($cartItems as $possiblePurchases)
           {
               array_push($_SESSION["cartItems"], $possiblePurchases);
           }
       
       }
       else
       {
           // if there isn't a cart just make a new one with
           // the provided items from browse.
           $_SESSION["cartItems"] = $cartItems;
       }
       
       // show me what I got
       print_r($_SESSION);
       
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