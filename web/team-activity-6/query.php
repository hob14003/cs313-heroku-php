<?php



// get the data from the POST
$book = $_POST['book'];

$chapter = $_POST['chapter'];

$verse = $_POST['verse'];

$content = $_POST['content'];

$topicIds = $_POST['chkTopics'];



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






  // Now we bind the values to the placeholders. This does some nice things

  // including sanitizing the input with regard to sql commands.

  $statement->bindValue(':book', $book);

  $statement->bindValue(':chapter', $chapter);

  $statement->bindValue(':verse', $verse);

  $statement->bindValue(':content', $content);



  $statement->execute();


  // get the new id

	$scriptureId = $db->lastInsertId("scripture_id_seq");



	// Now go through each topic id in the list from the user's checkboxes

	foreach ($topicIds as $topicId)

	{

		echo "ScriptureId: $scriptureId, topicId: $topicId";



		// Again, first prepare the statement

		$statement = $db->prepare('INSERT INTO scripture_topic(scriptureId, topicId) VALUES(:scriptureId, :topicId)');



		// Then, bind the values

		$statement->bindValue(':scriptureId', $scriptureId);

		$statement->bindValue(':topicId', $topicId);



		$statement->execute();

	}

}

catch (Exception $ex)

{

	// Please be aware that you don't want to output the Exception message in

	// a production environment

	echo "Error with DB. Details: $ex";

	die();

}



// finally, redirect them to a new page to actually show the topics

header("Location: showTopics.php");



die(); // we always include a die after redirects. In this case, there would be no

       // harm if the user got the rest of the page, because there is nothing else

       // but in general, there could be things after here that we don't want them

       // to see.



}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}








?>