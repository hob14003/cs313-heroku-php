<?php session_start(); ?>

<html>

<head>
<link rel="stylesheet" href="style.css">


</head>


<body>
    <!-- adds the navigation bar -->
    <?php include "populate.php" ?>


    <div class="buffer">
    <h1>Enter shipping information</h1>        
    </div>

    <div class="container">
    <form action="confirm.php" action="post">

    <textarea placeholder="Enter First Name" name="fname" id="fname" ></textarea>
    <textarea placeholder="Enter Last Name" name="lname"></textarea>
    <textarea placeholder="Enter street address" name="address"></textarea>
    <textarea placeholder="Enter postal code" name="pcode"></textarea>
    <textarea placeholder="Enter state" name="state"></textarea>
    <textarea placeholder="Enter country" name="country"></textarea>
    <input type="submit" value="Proceed to confirmation page">

    </form>
    </div>

</body>




</html>