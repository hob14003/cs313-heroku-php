<?php
    if(isset($_POST['clear']))
    {
        session_destroy();
        session_start();
    }
    else
    {
        session_start();
    }

    require("dbConnect.php");
    $db = get_db();
    $falseLog = false;

    if (isset($_POST['username']) && isset($_POST['password']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = 'SELECT password FROM logins WHERE username=:username';
        $statement = $db->prepare($query);
        $statement->bindvalue(':username', $username);
        $status = $statement->execute();

        if ($status)
        {
            $row = $statement->fetch();
            $dbpassword = $row['password'];

            if (password_verify($password, $dbpassword))
            {
                $_SESSION['username'] = $username;
                header("Location: week07-2ta.php");
                die();
            }
            else
            {
                $falseLog = true;
            }
        }
    }

    if ($falseLog == true)
    {
        echo "<br>ERROR incorrect username or password<br>";
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <h1>Welcome, Please Sign In</h1>
        <form method="POST" action="week07ta.php">
            <h2>Username</h2>
            <input type="text" name="username"><br><br>
            <h2>Password </h2>
            <input type="password" name="password"><br>
            <input type="submit" value="login"><br>
        </form>
        <p>If you don't have an accout Sign Up</p>
        <a href="week07-1ta.php">Sign Up</a>
    </body>
</html>