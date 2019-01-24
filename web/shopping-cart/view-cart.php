<?php session_start(); ?>

<?php

$purchasedItems = $_POST["purchasedItems[]"];
echo "hello world";
echo $_POST["purchasedItems[0]"];

foreach($purchasedItems as $item)
echo $item;

?>