<?php
include "storage.php";

echo "<nav> <ul>";
foreach($navigation as $navItem)
{
  echo  "<li><a href=\"$navItem.php\">$navItem</a></li><br>";

  echo "Hello World";

}

echo "<ul></nav>";

 ?>