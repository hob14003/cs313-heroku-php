<?php session_start(); ?>

<html>

<head>
<link rel="stylesheet" href="style.css">


</head>


<body>
    <!-- adds the navigation bar -->
    <?php include "populate.php" ?>

    <div class="buffer">
        <h1>Items Currently in Cart</h1>
    </div>
    <?php
    // check if there is a cart already
    // if there is
     if (array_key_exists('cartItems',$_SESSION) && !empty($_SESSION['cartItems']))
     {
        // display each item
         foreach($_SESSION['cartItems'] as $item)
         {
            echo "<div class=\"container\"> $item </div>";
         }

     }



    ?>

</body>




</html>