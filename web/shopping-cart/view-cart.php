<?php session_start(); ?>

<?php

$cartItems = array();


foreach($_POST["purchasedItems"] as $item)
{
//echo $item;
array_push($cartItems,$item);
}

echo $_SESSION["cartItems"][0];


$_SESSION["cartItems"] = $cartItems;
print_r($_SESSION);

?>