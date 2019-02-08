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

<form>
<h1>Enter new client information</h1>
<input type="text" placeholder="Name">
<input type="text" placeholder="Phone number">
<input type="text" placeholder="Summary">
<input type="submit" value="Submit new client">
</form>

<form>
<h1>Enter Call History</h1>
<input type="text" placeholder="Employee Name">
<input type="text" placeholder="Client name">
<input type="text" placeholder="Summary">
<input type="text" placeholder="Date">

<input type="submit" value="Submit Report">
</form>


</body>



</html>