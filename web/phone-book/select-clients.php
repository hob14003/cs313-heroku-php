<?php
try
{
    // hold the client name passed in;
   $client = $_POST["client"];

   echo $client;

  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);





//foreach ($db->query('SELECT username, phone FROM clients') as $row)
foreach ($db->query('SELECT username, phone FROM clients WHERE username LIKE' . ' ' . $_POST["client"]) as $row)
{
  echo 'user: ' . $row['username'];
  echo ' phone number: ' . $row['phone'];
  echo '<br/>';
}


}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}




?>