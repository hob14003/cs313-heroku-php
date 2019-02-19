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




    // hold the client name passed in;
    $username = $_POST["Name"];
    $password = $_POST["Password"];


    // turn it into a hash
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    


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
    
    
    // insert into the database
    $query = 'INSERT INTO auth(username, password) VALUES(:username, :hashPass)';
	 $statement = $db->prepare($query);


	$statement->bindValue(':username', $username);
   $statement->bindValue(':hashPass', $passwordHash);
   $statement->execute();






 
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}














?>



<?php

echo "<div class=\"container\"> <p>Call Successfully Added! </p> <p> </p> </div>";


?>


