<?php session_start(); ?>

<?php

$removedItems = array();

echo "sklajdlsajkdajl";


foreach($_POST['rejecteditems'] as $yui)
{
    array_push($removedItems,$item);

echo $yui;
//echo $item;
}



// check if there is a cart already
// if there is
if (array_key_exists('cartItems',$_SESSION) && !empty($_SESSION['cartItems']))
{


    $trueCartItems = $_SESSION['cartItems'];

    foreach($removedItems as $remove)
    {
        // Remove each new item from the session cart
        foreach($trueCartItems as $possiblePurchases)
        {
            if ($remove == $possiblePurchases)
            {
                unset($trueCartItems[$possiblePurchases]);
            }

        }

    }

    // set the new session key
    $_SESSION['cartItems'] = $trueCartItems;


    
    foreach($trueCartItems)
    {
        echo "1";
    }


    print_r($_SESSION);
}




?>
