<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>

<?php $useremail = $_POST["email"]; ?>
Your email address is: <?php echo "<a href=\"mailto:$useremail\""; ?><br>


Your major is: <?php echo $_POST["choices"]; ?><br>

Comments: <?php echo $_POST["summary"]; ?><br>


</body>
</html>