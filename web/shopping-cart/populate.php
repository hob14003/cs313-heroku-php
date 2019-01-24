<?php
include "storage.php";

echo "<nav>";
echo sizeof($navigation);

foreach($navigation as $navItem)
{
    echo  "<ul><li><a href=\"$navItem.php\">$navItem</a></li></ul>";

}

echo "</nav>";

 ?>