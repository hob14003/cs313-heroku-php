<?php session_start(); ?>


<?php
try
{
    // hold the client name passed in;
   $client = $_POST["client"];
    
   $specialId = 1;

  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


echo "<div class='container'>";


// using session
if (array_key_exists('cartItems',$_SESSION) && !empty($_SESSION['cartItems']))
{
   // set it
   $_SESSION["cartItems"] = $client;


}
else
{

   // set it
    $_SESSION["cartItems"] = $client;
}








 foreach ($db->query('SELECT username, phone, about FROM clients WHERE username LIKE' . '\'' . $client . '%\'') as $row)
 {
     $username =  $row['username'];
     $phoneNumber = $row['phone'];
     $position = $row['about'];

   echo "Client name is ";
   echo $username;
   echo "\n";

   echo "Phone Number: ";
   echo $phoneNumber;
   echo "\n";

   echo "Summary: ";
   echo $position;
   echo "\n";
 }


// using the session
 foreach ($db->query('SELECT id FROM clients WHERE username LIKE' . '\'' . $_SESSION["cartItems"] . '%\'') as $row)
 {
$specialId = $row['id'];

 }




// get the call information
 foreach ($db->query('SELECT clients.username,employees.username AS eUser,calls.client_id,calls.employee_id,calldate,summary 
 FROM calls JOIN clients ON calls.client_id = clients.id JOIN employees ON calls.employee_id = employees.id
 WHERE calls.client_id= ' . '\'' . $specialId . '\''
 ) as $row)
 {
  
  $eName = $row['calldate'];


  echo "<div class='container'>";

  echo "\n";
  echo "Last Called on " . $eName;
  echo "\n";

  echo "</div>";


 }


 echo "</div>";


}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}




?>

