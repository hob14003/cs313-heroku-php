<?php
try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  $id = 1;
$name = "Jesse";


 $stmt = $db->prepare('SELECT * FROM clients WHERE id=:id AND username=:name');
 $stmt->bindValue(':id', $id, PDO::PARAM_INT);
 $stmt->bindValue(':name', $name, PDO::PARAM_STR);
 $stmt->execute();
 $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 

echo $rows['username'];


}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}




?>