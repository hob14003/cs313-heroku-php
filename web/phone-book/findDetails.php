<html>

<head>
<link rel="stylesheet" href="style.css">
<script src="script.js" defer> </script>
</head>


<body>
<!-- adds the navigation bar -->
<?php include "populate.php" ?>
<div class="buffer"> </div>


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



echo "<div class='container'>";

//foreach ($db->query('SELECT username, phone FROM clients') as $row)
foreach ($db->query('SELECT username, phone FROM clients WHERE username LIKE' . '\'' . $client . '%\'') as $row)
{
    $username =  $row['username'];
    $phoneNumber = $row['phone'];
    $position = $row['position'];

  echo "<p>"
  echo "Client name is ";
  echo $username;
  echo "\n";

  echo "Phone Number: ";
  echo $phoneNumber;
  echo "\n";

  echo "Summary: ";
  echo $position;
  echo "\n";

  echo "</p>";


}

echo "</div>";


}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}




?>


</body>



</html>