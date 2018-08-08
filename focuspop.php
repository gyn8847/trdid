<?php
	session_start();
	$pop = $_SESSION["pop"];
	$pop++;
	$_SESSION["pop"] = $pop;
	header("location:index.php");
?>
