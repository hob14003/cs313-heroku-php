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


  catch (PDOException $ex)
  {
    echo 'Error!: ' . $ex->getMessage();
    die();
  }

?>


<!DOCTYPE html>

<html>

<head>

	<title>Scripture and Topic List</title>

</head>



<body>

<div>



<h1>Scripture and Topic List</h1>



<?php





try

{

	// For this example, we are going to make a call to the DB to get the scriptures

	// and then for each one, make a separate call to get its topics.

	// This could be done with a single query (and then more processing of the resultset

	// afterward) as follows:



	//	$statement = $db->prepare('SELECT book, chapter, verse, content, t.name FROM scripture s'

	//	. ' INNER JOIN scripture_topic st ON s.id = st.scriptureId'

	//	. ' INNER JOIN topic t ON st.topicId = t.id');





	// prepare the statement

	$statement = $db->prepare('SELECT id, book, chapter, verse, content FROM scripture');

	$statement->execute();



	// Go through each result

	while ($row = $statement->fetch(PDO::FETCH_ASSOC))

	{

		echo '<p>';

		echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':';

		echo $row['verse'] . '</strong>' . ' - ' . $row['content'];

		echo '<br />';

		echo 'Topics: ';



		// get the topics now for this scripture

		$stmtTopics = $db->prepare('SELECT name FROM topic t'

			. ' INNER JOIN scripture_topic st ON st.topicId = t.id'

			. ' WHERE st.scriptureId = :scriptureId');



		$stmtTopics->bindValue(':scriptureId', $row['id']);

		$stmtTopics->execute();



		// Go through each topic in the result

		while ($topicRow = $stmtTopics->fetch(PDO::FETCH_ASSOC))

		{

			echo $topicRow['name'] . ' ';

		}



		echo '</p>';

	}





}

catch (PDOException $ex)

{

	echo "Error with DB. Details: $ex";

	die();

}



?>



</div>



</body>

</html>