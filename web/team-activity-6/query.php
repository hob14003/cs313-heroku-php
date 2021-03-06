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


  $query = 'INSERT INTO scripture(book, chapter, verse, content) VALUES(:book, :chapter, :verse, :content)';
	$statement = $db->prepare($query);


    $statement->bindValue(':book', $book);

	$statement->bindValue(':chapter', $chapter);

	$statement->bindValue(':verse', $verse);

	$statement->bindValue(':content', $content);



    $statement->execute();
    
// get the new id
    $scriptureId = $db->lastInsertId("scripture_id_seq");


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
  echo 'Error!: ' . $ex->getMessage();
  die();
}



// finally, redirect them to a new page to actually show the topics



// kill it
//die(); 



?>