<!DOCTYPE html>

<?php
 	session_start();
 	if (!isset ($_SESSION["number"])) {
 	$_SESSION["number"] = 0;
 	}
 	$num = $_SESSION["number"];
?>

<html>
<head>
<title>Page Title</title>
</head>
<body>
<p>$event</p>
<?php
   echo "<p>The year is: $num</p></br>";
 		echo "<p>Population: $num</p>";
   echo "<p>Soldiers: $num</p>";
   echo "<p>GDP per capita: $num</p>";
   echo "<p>Your tech level is: $num</p>";
	?>
<p><a href="popfocus.php">Focus Population</a></p>
<p><a href="milfocus.php">Focus Soldiers</a></p>
<p><a href="ecofocus.php">Focus Economy</a></p>
<p><a href="techfocus.php">Focus Technology</a></p>
 
</body>
 
</html>
