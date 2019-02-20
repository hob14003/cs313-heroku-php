<?php
try
{
    // hold the client name passed in;
   $username = $_POST["username"];
 //  $password = $_POST["password"];
 //  $passwordHash = password_hash($password, PASSWORD_DEFAULT);

  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo "made it this far";


//foreach ($db->query('SELECT username, password FROM auth WHERE username' . '=' . '\''. $username . '\''  . ';'  ) as $row)
foreach ($db->query('SELECT * FROM auth WHERE username LIKE' . '\'' . $username . '%\'') as $row)
{
     $username =  $row['username'];
   //   $password = $row['password'];

   echo "Hash is ";
   echo $username;
 //  echo $password;

}





}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
 // die();
}



?>

