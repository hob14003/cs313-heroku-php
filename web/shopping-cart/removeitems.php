<?php session_start(); ?>

<?php

$removedItems = array();



foreach($_POST['rejecteditems'] as $yui)
{
    array_push($removedItems,$yui);
}

foreach($removedItems as $it)
{
    echo $it;
}


// check if there is a cart already
// if there is
if (array_key_exists('cartItems',$_SESSION) && !empty($_SESSION['cartItems']))
{
    $trueCart = $_SESSION['cartItems'];

    foreach($removedItems as $it)
    {

    // add each new item into the session cart
    foreach($trueCart as $possiblePurchases)
    {

        if ($it === $possiblePurchases)
        {
            unset($trueCart[$possiblePurchases]);
        }

    }
    echo $trueCart;

    $_SESSION['cartItems'] = $trueCart;

}

}





?>
