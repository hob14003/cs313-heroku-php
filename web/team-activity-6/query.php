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


  echo "verse=$verse\n";



}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}


// get the data from the POST

$book = $_POST['txtBook'];

$chapter = $_POST['txtChapter'];

$verse = $_POST['txtVerse'];

$content = $_POST['txtContent'];

$topicIds = $_POST['chkTopics'];



echo "book=$book\n";


?>