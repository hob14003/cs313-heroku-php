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
    $emp = $_POST["EmpName"];
    $empPhone = $_POST["EmpPhone"];

    $client = $_POST["CName"];
    $cPhone = $_POST["CPhone"];

    $summary = $_POST["Summary"];
    $summary = $_POST["Date"];
    



    $dbUrl = getenv('DATABASE_URL');

    $dbOpts = parse_url($dbUrl);
  
    $dbHost = $dbOpts["host"];
    $dbPort = $dbOpts["port"];
    $dbUser = $dbOpts["user"];
    $dbPassword = $dbOpts["pass"];
    $dbName = ltrim($dbOpts["path"],'/');
  
    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
  
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $empSelect = 'Select id from clients where username=:cUsername AND phone=:cPhone;';
    $statementEmp = $db->prepare($query);
    $statementEmp->bindValue(':cUsername',$client);
    $statementEmp->bindValue(':cPhone',$cPhone);
    $statementEmp->execute();


    $ClientID = "";

    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{

	

      $ClientId =  $row['id'];
        
    }





?>



<?php

echo "<div class=\"container\"> <p>Call Successfully Added! </p> <p> $row </p> </div>";


?>


