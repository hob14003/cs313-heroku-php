<?php session_start(); ?>

<?php

$removedItems = array();


foreach($_POST['rejecteditems'] as $yui)
{
echo $yui;
//echo $item;
array_push($removedItems,$item);
}


// check if there is a cart already
// if there is
if (array_key_exists('cartItems',$_SESSION) && !empty($_SESSION['cartItems']))
{
    foreach($removedItems as $remove)
    {

    
        // add each new item into the session cart
        foreach($cartItems as $possiblePurchases)
        {
            if ($remove == $possiblePurchases)
            {
                unset($cartItems[$possiblePurchases]);
            }

        }

    }

}




?>
