<?php
    session_start();
    if (isset($_SESSION['username']))
    {
        $username = $_SESSION['username'];
    }
    else
    {
        header("Location: week07ta.php");
        die();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome Page</title>
    </head>
    <body>
        <p> Welcome <?= $username ?></p><br>
        <form method="POST" action="week07ta.php">
            <input type="hidden" name="clear">
            <input type="submit" value="sign out">
        </form>
    </body>
</html>