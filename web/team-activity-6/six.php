<?php
try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = "ec2-107-20-167-11.compute-1.amazonaws.com";
  $dbPort = "5432";
  $dbUser = "eeoypxkfqceele";
  $dbPassword = "8a8e822c95e1d6a4a2215c88ac4b20bc89f84ae1cc7480ce7212d82d1ba707e0";
  $dbName = "df3hvlpt6i3j3h";

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

?>



<html>
<head></head>


<body>

<form action="query.php" method="post">
Book:  <input type="text" name="book">
Chapter:  <input type="text" name="chapter">
Verse:  <input type="text" name="verse">
Content:  <input type="text" name="content">



<?php
try

{

	// prepare the statement

	$statement = $db->prepare('SELECT id, name FROM topic');
	$statement->execute();



	// Go through each result

	while ($row = $statement->fetch(PDO::FETCH_ASSOC))

	{

		$id = $row['id'];

		$name = $row['name'];


		// Notice that we want the value of the checkbox to be the id of the label

		echo "<input type='checkbox' name='chkTopics[]' id='chkTopics$id' value='$id'>";



		// Also, so they can click on the label, and have it select the checkbox,

		// we need to use a label tag, and have it point to the id of the input element.

		// The trick here is that we need a unique id for each one. In this case,

		// we use "chkTopics" followed by the id, so that it becomes something like

		// "chkTopics1" and "chkTopics2", etc.

		echo "<label for='chkTopics$id'>$name</label><br />";



		// put a newline out there just to make our "view source" experience better

		echo "\n";

	}



}

catch (PDOException $ex)

{


	echo "Error connecting to DB. Details: $ex";

	die();

}

?>

<input type="submit" value="Add to Database" />
</form>


</body>

</html>