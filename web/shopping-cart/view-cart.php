<?php session_start(); ?>

<?php

$purchasedItems = $_POST["purchasedItems[]"];

foreach($purchasedItems as $item)
echo $item;

?>