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
    <p>   <?php echo $_POST['name']; ?> </p>
    </div>

</body>



</html>