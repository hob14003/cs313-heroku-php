<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo "<a href=\"mailto:$_POST[\"email\"]\">"; ?><br>


Your major is: <?php echo $_POST["choices"]; ?><br>

Comments: <?php echo $_POST["summary"]; ?><br>


</body>
</html>