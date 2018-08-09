<!DOCTYPE html>

<?php
 	session_start();
 	if (!isset ($_SESSION["year"])) {
 	$_SESSION["year"] = 0;
 	}
 	$year = $_SESSION["year"];
	if (!isset ($_SESSION["pop"])) {
 	$_SESSION["pop"] = 5000;
 	}
 	$pop = $_SESSION["pop"];
	if (!isset ($_SESSION["mil"])) {
 	$_SESSION["mil"] = 50;
 	}
 	$mil = $_SESSION["mil"];
	if (!isset ($_SESSION["eco"])) {
 	$_SESSION["eco"] = 10;
 	}
 	$eco = $_SESSION["eco"];
	if (!isset ($_SESSION["tech"])) {
 	$_SESSION["tech"] = 0;
 	}
 	$tech = $_SESSION["tech"];
	if (!isset ($_SESSION["techstate"])) {
 	$_SESSION["techstate"] = "Prehistoric Age";
 	}
 	$techstate = $_SESSION["techstate"];
	if (!isset ($_SESSION["event"])) {
 	$_SESSION["event"] = "Alpha test v0.03";
 	}
 	$event = $_SESSION["event"];
?>

<html>
<head>
<title>Page Title</title>
</head>
<body>
<?php
   echo "<p>The year is: $year</p></br>";
   echo "<p>$event</p></br>";
   echo "<p>Population: $pop</p>";
   echo "<p>Soldiers: $mil</p>";
   echo "<p>GDP per capita: $eco</p>";
   echo "<p>Your tech level is: $techstate</p>";
?>
<p>Population Focus:<a href="focuspop.php"></a></p>
<p>Military Focus:<a href="focusmil.php"></a></p>
<p>Economy Focus:<a href="focuseco.php"></a></p>
<p>Technology Focus:<a href="focustech.php"></a></p>
<p>Next Turn:<a href="focus.php"></a></p>
<form action="focus.php">
       <input type="submit" value="Next Turn">
</form>	
</br></br></br><p><a href="newgame.php">Restart</a></p>
 
</body>
 
</html>
