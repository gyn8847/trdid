<?php
	session_start();

	$eventnum = rand(1,2);
	if(rand == 1){
	$event = "You experience a fruitful harvest"	
	$pop = $_SESSION["pop"];
	$pop = $pop + ($pop / 1000) + rand(15,25));
	$_SESSION["pop"] = $pop;
	}
	elseif(rand == 2){
	$event = "You experience a poor harvest"	
	$pop = $_SESSION["pop"];
	$pop = $pop + ($pop / 5000) + rand(5,15));
	$_SESSION["pop"] = $pop;
	}
	
	header("location:index.php");
	
?>
