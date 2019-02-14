<html>

<head>
<link rel="stylesheet" href="style.css">
<script src="script.js" defer> </script>
</head>


<body>
<!-- adds the navigation bar -->
<?php include "populate.php" ?>
<div class="buffer"> </div>
<div class="container">
<p id="heading"> Enter Information </p>
</div>

<form action="addClient.php" method="post">
<h1>Enter new client information</h1>
<input type="text" name="Name" placeholder="Name">
<input type="text" name="Phone" placeholder="Phone number">
<input type="text" name="Summary" placeholder="Summary">
<input type="submit" value="Submit new client">
</form>

<form action="addCall.php" method="post" >
<h1>Enter Call History</h1>
<input type="text" name="EmpName" placeholder="Employee Name">
<input type="text" name="EmpPhone" placeholder="Employee Phone">

<input type="text" name="CName" placeholder="Client name">
<input type="text" name="CPhone" placeholder="Client Phone">

<input type="text" name="Summary" placeholder="Summary">
<input type="text" name="Date" placeholder="Date">

<input type="submit" value="Submit Report">
</form>


</body>



</html>