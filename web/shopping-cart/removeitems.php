<?php session_start(); ?>

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
    echo "hello world";
}


if (array_key_exists('cartItems',$_SESSION) && !empty($_SESSION['cartItems']))
{
    foreach($removeMe as $removedItem)
    {
    // add each new item into the session cart
    foreach($_SESSION['cartItems'] as $possiblePurchases)
    {
        if ($possiblePurchases == $removedItem)
        {
            echo "WE HAVE A MATCH!";

        }
    }

    }
}




?>