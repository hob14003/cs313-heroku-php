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
            Name:  <input type="text" name="name">
            Email:  <input type="text" name="email">
   
    <textarea placeholder="Enter Comments" name="summary"></textarea>

    <input type="submit">
</form>

</div>

</body>




</html>