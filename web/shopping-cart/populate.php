<?php
include "storage.php"

function populate()
{
foreach($skateboardDeck as $deck)
{
    echo "<p> hello world </p>";
    echo "<input type=\"radio\" name=\"deck\" value=\"$deck skate deck\"> $skateboardDeck[0] <br>";
}

}

 ?>