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
    




    // $query = 'INSERT INTO calls(client_id, employee_id, calldate,summary) VALUES(:CId, :empId, :calldate,:summary)';
	// $statement = $db->prepare($query);

    // $statement->bindValue(':CId', $ClientId);
	// $statement->bindValue(':empId', $EmployeeId);
    // $statement->bindValue(':calldate', $date);
    // $statement->bindValue(':summary', $summary);
    // $statement->execute();






?>



<?php

echo "<div class=\"container\"> <p>Call Successfully Added! </p> <p> </p> </div>";
echo $emp;
echo $empPhone;
echo $client;
echo $cPhone;
echo $summary;
echo $date;

?>


