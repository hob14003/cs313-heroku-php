<?php
include "storage.php";

echo "<nav> <ul>";
foreach($navigation as $navItem)
{
  echo  "<li><a href=\"$navItem.php\">$navItem</a></li>";
}

echo "<ul></nav>";

 ?>