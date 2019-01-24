<?php session_start(); ?>

<?php

$cartItems = array();


foreach($_POST["purchasedItems"] as $item)
{
//echo $item;
array_push($cartItems,$item);
}

$_SESSION["cartItems"] = $cartItems;


echo $_SESSION["cartItems"][0];

foreach ($_SESSION["cartItems"][0] as $sitem)
{
    echo $sitem;
}


$_SESSION["cartItems"] = $cartItems;
print_r($_SESSION);

?>