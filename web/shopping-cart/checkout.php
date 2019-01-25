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
    <form action="confirm.php" method="post" >
            <textarea placeholder="Enter First Name" name="fname"></textarea>
            <textarea placeholder="Enter Last Name" name="lname"></textarea>

   
    <textarea placeholder="Enter street address" name="address"></textarea>
    <textarea placeholder="Enter Zip code" name="zip"></textarea>
    <textarea placeholder="Enter State" name="state"></textarea>
    <textarea placeholder="Enter Country" name="country"></textarea>


    <input type="submit">
</form>

</div>

</body>




</html>