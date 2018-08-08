<?php
	session_start();
	$pop = $_SESSION["pop"];
	$pop = $pop + rand(5,20) + ($pop / 1000);
	$_SESSION["pop"] = $pop;
	header("location:index.php");
?>
