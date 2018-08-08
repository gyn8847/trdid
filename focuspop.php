<?php
	session_start();
	$event = "You experience a fruitful harvest";	
	$pop = $_SESSION["pop"];
	$pop = $pop + ($pop / 1000) + rand(15,25));
	$_SESSION["pop"] = $pop;
	header("location:index.php");
?>
