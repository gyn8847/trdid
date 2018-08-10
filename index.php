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
 	$_SESSION["eco"] = 50;
 	}
 	$eco = $_SESSION["eco"];
	if (!isset ($_SESSION["tech"])) {
 	$_SESSION["tech"] = 0;
 	}	
 	$tech = $_SESSION["tech"];
	if (!isset ($_SESSION["civpoints"])) {
 	$_SESSION["civpoints"] = 5;
 	}	
 	$civpoints = $_SESSION["civpoints"];
	if (!isset ($_SESSION["civpointpop"])) {
 	$_SESSION["civpointpop"] = 0;
 	}	
 	$civpointpop = $_SESSION["civpointpop"];
	if (!isset ($_SESSION["civpointmil"])) {
 	$_SESSION["civpointmil"] = 0;
 	}	
 	$civpointmil = $_SESSION["civpointmil"];
	if (!isset ($_SESSION["civpointeco"])) {
 	$_SESSION["civpointeco"] = 0;
 	}	
 	$civpointeco = $_SESSION["civpointeco"];
	if (!isset ($_SESSION["civpointtech"])) {
 	$_SESSION["civpointtech"] = 0;
 	}	
 	$civpointtech = $_SESSION["civpointtech"];
	if (!isset ($_SESSION["techstate"])) {
 	$_SESSION["techstate"] = "Prehistoric Age";
 	}
 	$techstate = $_SESSION["techstate"];
	if (!isset ($_SESSION["event"])) {
 	$_SESSION["event"] = "Alpha test v0.05";
 	}
 	$event = $_SESSION["event"];
?>

<html>
<head>
<title>NationSim1998</title>
</head>
<body>
<?php
   echo "<p>The year is: $year</p></br>";
   echo "<p>$event</p></br>";
   echo "<p>Population: $pop</p>";
   echo "<p>Soldiers: $mil</p>";
   echo "<p>GDP per capita: $eco</p>";
   echo "<p>Your tech level is: $techstate</p>";
   echo "<p><br/>You have $civpoints assignable points</p>";
   echo "Population Focus: $civpointpop";
?>
   <form action="focuspopdown.php"><input type="submit" value="-point"></form><form action="focuspopup.php"><input type="submit" value="+point"></form>
<?php
   echo "Military Focus: $civpointmil";
?>
   <form action="focusmildown.php"><input type="submit" value="-point"></form><form action="focusmilup.php"><input type="submit" value="+point"></form>
<?php
   echo "Economy Focus: $civpointeco";
?>
   <form action="focusecodown.php"><input type="submit" value="-point"></form><form action="focusecoup.php"><input type="submit" value="+point"></form>
<?php
   echo "Technology Focus: $civpointtech";
?>
   <form action="focustechdown.php"><input type="submit" value="-point"></form><form action="focustechup.php"><input type="submit" value="+point"></form>

<br/>
<form action="focus.php">
       <input type="submit" value="Next Turn">
</form>	
</br></br></br><p><a href="newgame.php">Restart</a></p>

<p id="demo"></p>

<script>
// Set the date we're counting down to
var startpoint = new Date().getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = now - startpoint;
    
    // Time calculations for days, hours, minutes and seconds
    var yeartimer = Math.floor((distance % 10));
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = "Year: " + yeartimer;
    //days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (seconds == 0) {
        document.getElementById("demo2").innerHTML = "EXPIRED";
    }
    if (seconds == 1) {
        document.getElementById("demo2").innerHTML = "NOPE";
    }
    if (seconds == 30) {
        document.getElementById("demo2").innerHTML = "EXPIRED";
    }
    if (seconds == 31) {
        document.getElementById("demo2").innerHTML = "NOPE";
    }
}, 1000);
</script>

</body>
 
</html>
