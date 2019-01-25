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


    echo "sklajdlsajkdajl";
    foreach($trueCartItems)
    {
        echo "1";
    }


    print_r($_SESSION);
}




?>
