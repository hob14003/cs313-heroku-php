<?php session_start(); ?>

<?php
$removeMe = array();

// remove requested items from cart.
foreach($_POST["purchasedItems"] as $item)
{
//echo $item;
array_push($removeMe,$item);
}


foreach($removeMe as $removed)
{
    echo $removed;
}

?>