<?php session_start(); ?>

<html>

<head>
<link rel="stylesheet" href="style.css">


</head>


<body>
    <!-- adds the navigation bar -->
    <?php include "populate.php" ?>

    <?php
    // check if there is a cart already
    // if there is
    if (array_key_exists('cartItems',$_SESSION) && !empty($_SESSION['cartItems']))
    {
        // display it
        foreach($_SESSION['cartItems'] as $cartItem)
        {
            echo $cartItem; <br>

        }

    }



    ?>

</body>




</html>