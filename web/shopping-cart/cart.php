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
        //     // display it
//        print_r($_SESSION);
         
        //echo $_SESSION['cartItems'];
        //  echo $currentCart;
        //         echo $cartItem;

         

    // }



    ?>

</body>




</html>