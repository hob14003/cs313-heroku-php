<?php session_start(); ?>

<?php

$removedItems = array();



foreach($_POST['rejecteditems'] as $yui)
{
    array_push($removedItems,$yui);
 //   echo $yui;
}

foreach($removedItems as $it)
{
    echo $it;
}





?>
