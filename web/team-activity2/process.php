<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>

<?php $useremail = $_POST["email"]; ?>
Your email address is: <?php echo "<a href=\"mailto:$useremail\" > $useremail </a>"; ?><br>


Your major is: <?php echo $_POST["choices"]; ?><br>

Comments: <?php echo $_POST["summary"]; ?><br>

Continents we've visited: 
<?php if( isset($_POST['northA']) ) { echo $_POST['northA']; } ?><br>
<?php if( isset($_POST['southA']) ) { echo $_POST['southA']; } ?><br>
<?php if( isset($_POST['euro']) ) { echo $_POST['euro']; } ?><br>
<?php if( isset($_POST['asia']) ) { echo $_POST['asia']; } ?><br>
<?php if( isset($_POST['australia']) ) { echo $_POST['australia']; } ?><br>
<?php if( isset($_POST['africa']) ) { echo $_POST['africa']; } ?><br>
<?php if( isset($_POST['antartica']) ) { echo $_POST['antartica']; } ?><br>


</body>
</html>