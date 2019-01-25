<?php session_start(); ?>

<html>

<head>
<link rel="stylesheet" href="style.css">
</head>


<body>


<?php
include 'removeitems.php';


?>

    <!-- adds the navigation bar -->
    <?php //include "populate.php" ?>

    <div class="buffer">
        <h1>Items Currently in Cart</h1>
    </div>


    <form action="cart.php" method="post"  id="clearMe">
    <?php
    // check if there is a cart already
    // if there is
     if (array_key_exists('cartItems',$_SESSION) && !empty($_SESSION['cartItems']))
     {
        // display each item
         foreach($_SESSION['cartItems'] as $item)
         {
            echo "<div class=\"container\"> $item";
            echo "<input type=\"checkbox\" name=\"rejecteditems[]\" value=\"$item\">";
            echo "</div>";

         }

     }



    ?>
    <input type="submit" value="Remove Selected">
    </form>


</body>




</html>