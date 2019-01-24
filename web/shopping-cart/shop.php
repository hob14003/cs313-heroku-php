<?php

$test = "testing";
// keep a record of all the items to browse
$skateboardDeck = array("red","blue","yellow");
$toques = array("red","blue","yellow");
$items = array($skateboardDeck,$toques);

function showItems()
{
    foreach($skateboardDeck as $deck)
   echo "<input type=\"radio" name=\"deck\" value=\"$deck skate deck\"> $skateboardDeck[0] <br>";

}


?>