<?php
// try
// {
//     // hold the client name passed in;
//    $username = $_POST["Name"];
//    $password = $_POST["Password"];
//    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

//     echo "made it this far";

//   $dbUrl = getenv('DATABASE_URL');

//   $dbOpts = parse_url($dbUrl);

//   $dbHost = $dbOpts["host"];
//   $dbPort = $dbOpts["port"];
//   $dbUser = $dbOpts["user"];
//   $dbPassword = $dbOpts["pass"];
//   $dbName = ltrim($dbOpts["path"],'/');

//   $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

//   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//  foreach ($db->query('SELECT username, password FROM auth WHERE username' . '=' . $username . ' AND ' . 'password=' . $passwordHash . ';'  ) as $row)
//  {

  

//      $username =  $row['username'];
//      $password =  $row['password'];


//    echo "Hash is ";
//    echo $username;



//    echo "Password is ";
//    echo $password;




//  }




// }
// catch (PDOException $ex)
// {
//   echo 'Error!: ' . $ex->getMessage();
//   die();
// }


echo "Hello world";

?>

