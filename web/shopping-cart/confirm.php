<?php session_start(); ?>
<html>

<head>
<link rel="stylesheet" href="style.css">
</head>

<body>


<?php

// filtering
$fname = filter_var($_POST['fname']);
$lname = filter_var($_POST['lname']);
$address = filter_var($_POST['address']);
$zip = filter_var($_POST['zip']);
$state = filter_var($_POST['state']);
$country = filter_var($_POST['country']);

?>


    <!-- adds the navigation bar -->
    <?php include "populate.php" ?>

    <div class="buffer">
    <h1>Confirmation Page</h1>    
    </div>    

    <div class="container"> 
    <p> First Name:   <?php echo $fname; ?> </p>
    </div>

    <div class="container"> 
    <p> Last Name:   <?php echo $lname; ?> </p>
    </div>

    <div class="container"> 
    <p> Street Address:   <?php echo $address; ?> </p>
    </div>

    <div class="container"> 
    <p> Zip Code:   <?php echo $zip; ?> </p>
    </div>

    <div class="container"> 
    <p> State:   <?php echo $state; ?> </p>
    </div>

    <div class="container"> 
    <p> Country:   <?php echo $country; ?> </p>
    </div>


    <div class="container"> 
    <p> Items to be purchased:   
        <?php foreach($_SESSION['cartItems'] as $sold)
        {

            echo filter_var($sold);
        }
        
        ?> 
    
    </p>
    </div>



</body>



</html>