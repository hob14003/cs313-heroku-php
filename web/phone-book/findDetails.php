<?php
try
{
    // hold the client name passed in;
   $client = $_POST["client"];
    

  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $client;

//echo "<div class='container'>";

   echo "<p>"


//foreach ($db->query('SELECT username, phone FROM clients') as $row)
 foreach ($db->query('SELECT username, phone, about FROM clients WHERE username LIKE' . '\'' . $client . '%\'') as $row)
 {
     $username =  $row['username'];
     $phoneNumber = $row['phone'];
     $position = $row['about'];

   echo "Client name is ";
   echo $username;
  // echo "\n";

   echo "Phone Number: ";
   echo $phoneNumber;
  // echo "\n";

   echo "Summary: ";
   echo $position;
  // echo "\n";



 }

    echo "</p>";

// echo "</div>";


}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}




?>

