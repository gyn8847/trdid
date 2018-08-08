<?php
	session_start();
	$pop = $_SESSION["pop"];
	$pop++;
	$_SESSION["number"] = $pop;
	header("location:number.php");
?>
