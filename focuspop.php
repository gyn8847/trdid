<?php
	session_start();
	$pop = $_SESSION["pop"];
	$pop = $pop + ($pop / 1000) + rand(15,25));
	$_SESSION["number"] = $pop;
	header("location:index.php");
?>
