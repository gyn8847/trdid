<!DOCTYPE html>

<?php
 	session_start();
	$techstate = "Ancient";
	$event = "";
 	if (!isset ($_SESSION["year"])) {
 	$_SESSION["year"] = 0;
 	}
 	$year = $_SESSION["year"];
	if (!isset ($_SESSION["pop"])) {
 	$_SESSION["pop"] = 5000;
 	}
 	$pop = $_SESSION["pop"];
	if (!isset ($_SESSION["mil"])) {
 	$_SESSION["mil"] = 0;
 	}
 	$mil = $_SESSION["mil"];
	if (!isset ($_SESSION["eco"])) {
 	$_SESSION["eco"] = 0;
 	}
 	$eco = $_SESSION["eco"];
	if (!isset ($_SESSION["tech"])) {
 	$_SESSION["tech"] = 0;
 	}
 	$tech = $_SESSION["tech"];
?>

<html>
<head>
<title>Page Title</title>
</head>
<body>
<p>$event</p>
<?php
   echo "<p>The year is: $year</p></br>";
   echo "<p>Population: $pop</p>";
   echo "<p>Soldiers: $mil</p>";
   echo "<p>GDP per capita: $eco</p>";
   echo "<p>Your tech level is: $techstate</p>";
	?>
<p><a href="focuspop.php">Focus Population</a></p>
<p><a href="focusmil.php">Focus Soldiers</a></p>
<p><a href="focuseco.php">Focus Economy</a></p>
<p><a href="focustech.php">Focus Technology</a></p>
 
</body>
 
</html>
