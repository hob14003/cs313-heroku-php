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

    <div class="container"> 
    <p> Name:   <?php echo $_POST['fname']; ?> </p>
    </div>

    <div class="container"> 
    <p> Name:   <?php echo $_POST['lname']; ?> </p>
    </div>

    <div class="container"> 
    <p> Name:   <?php echo $_POST['address']; ?> </p>
    </div>

    <div class="container"> 
    <p> Name:   <?php echo $_POST['zip']; ?> </p>
    </div>

    <div class="container"> 
    <p> Name:   <?php echo $_POST['state']; ?> </p>
    </div>

    <div class="container"> 
    <p> Name:   <?php echo $_POST['country']; ?> </p>
    </div>

</body>



</html>