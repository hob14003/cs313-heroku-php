<?php
include "storage.php";

echo "<nav>";
<p>
echo sizeof($navigation);
</p>
foreach($navigation as $navItem)
{
    echo  "<ul><li><a href=\"$navItem.php\">$navItem</a></li></ul>";

}

echo "</nav>";

 ?>