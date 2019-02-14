<html>

<head>
<link rel="stylesheet" href="style.css">
<script src="script.js" defer> </script>
</head>


<body>
<!-- adds the navigation bar -->
<?php include "populate.php" ?>


<?php
    // hold the client name passed in;
    $client = $_POST["Name"];
    $phone = $_POST["Phone"];
    $summary = $_POST["Summary"];


    $dbUrl = getenv('DATABASE_URL');

    $dbOpts = parse_url($dbUrl);
  
    $dbHost = $dbOpts["host"];
    $dbPort = $dbOpts["port"];
    $dbUser = $dbOpts["user"];
    $dbPassword = $dbOpts["pass"];
    $dbName = ltrim($dbOpts["path"],'/');
  
    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
  
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // actual sql statements
    $query = 'INSERT INTO clients(username, phone, about) VALUES(:client, :phone, :summary)';
	$statement = $db->prepare($query);


    $statement->bindValue(':client', $client);

	$statement->bindValue(':phone', $phone);

	$statement->bindValue(':summary', $summary);
    $statement->execute();
?>



<?php

echo "<div class=\"container\"> <p>Client Successfully Added!</p> </div>";


?>


