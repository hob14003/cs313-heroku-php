<?php
    $username = $_POST['username1'];
    $password = $_POST['password1'];

    if (!isset($username) || !isset($password))
    {
        header("Location: week07ta.php");
        die();
    }

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    require("dbConnect.php");
    $db = get_db();

    $test = 'INSERT INTO logins(username, password) VALUES(:username, :passwordHash)';
    $statement = $db->prepare($test);
    $statement->bindvalue(':username', $username);
    $statement->bindvalue('passwordHash', $passwordHash);
    $statement->execute();

    header("Location: week07ta.php");
    die();
?>