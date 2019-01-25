<?php session_start(); ?>

<html>

<head>
<link rel="stylesheet" href="style.css">


</head>


<body>


<?php
 
        $removeMe = array();
        
        // remove requested items from cart.
        foreach($_POST["rejecteditems"] as $item)
        {
            echo "<p> $item </p>";
        //echo $item;
        array_push($removeMe,$item);

        }
        
        
        foreach($removeMe as $removed)
        {
            echo $removed;
            echo " <p> hello world </p>";
        }

        

        
?>

    <!-- adds the navigation bar -->
    <?php include "populate.php" ?>

    <div class="buffer">
        <h1>Items Currently in Cart</h1>
    </div>


    <form action="cart.php" method="post">
    <?php
    // check if there is a cart already
    // if there is
     if (array_key_exists('cartItems',$_SESSION) && !empty($_SESSION['cartItems']))
     {
        // display each item
         foreach($_SESSION['cartItems'] as $item)
         {
            echo "<div class=\"container\"> $item";
            echo "<input type=\"checkbox\" name=\"rejecteditems[]\" value=\"$deck\">";
            echo "</div>";

         }

     }



    ?>
    <input type="submit" value="Remove Selected">
    </form>


</body>




</html>