<?php session_start(); ?>
<html>

<head>
<link rel="stylesheet" href="style.css">


</head>


<body>
    <!-- adds the navigation bar -->
    <?php include "populate.php" ?>


    <div class="buffer">
    <h1>Confirmation Page</h1>    
    </div>    

    <?php
    echo $_POST['fname'];
    echo "hello world";
    ?>

    <div class="container"> <p> First Name:  <?php echo $_POST['fname'];  ?> </p> </div>
    

</body>



</html>