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
    $emp = $_POST["EmpName"];
    $empPhone = $_POST["EmpPhone"];

    $client = $_POST["CName"];
    $cPhone = $_POST["CPhone"];

    $summary = $_POST["Summary"];
    $date = $_POST["Date"];
    


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
    
    
    
    $ClientId = "";
    $empId = "";


    
 foreach ($db->query('SELECT id FROM clients WHERE username' . '=' . '\'' . $client . '\'') as $row)
 {
     $ClientId =  $row['id'];


 }



     
 foreach ($db->query('SELECT id FROM employees WHERE username' . '=' . '\'' . $emp . '\'') as $row)
 {
     $empId =  $row['id'];


 }




 
     $query = 'INSERT INTO calls(client_id, employee_id, calldate,summary) VALUES(:CId, :empId, :calldate,:summary)';
	 $statement = $db->prepare($query);

     $statement->bindValue(':CId', $ClientId);
	 $statement->bindValue(':empId', $empId);
     $statement->bindValue(':calldate', $date);
     $statement->bindValue(':summary', $summary);
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

echo $ClientId . helloWorld;
echo $empId;

?>


