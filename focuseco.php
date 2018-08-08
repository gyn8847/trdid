<?php

	session_start();
  	$year = $_SESSION["year"];
	$pop = $_SESSION["pop"];
	$mil = $_SESSION["mil"];
	$eco = $_SESSION["eco"];
	$tech = $_SESSION["tech"];
	
	$year++;
	$year = floor($year);
  	$_SESSION["year"] = $year;

	
	$pop = $pop + rand(3,15) + ($pop / 1500);
	$pop = floor($pop);
	$_SESSION["pop"] = $pop;
  
	
	$mil = $mil + rand(0,1) + ($pop / 30000);
	$mil = floor($mil);
	$_SESSION["mil"] = $mil;
  
	$eco = $eco + $tech + rand(1,(7+sqrt($tech*1.5))) - ($pop / 5000);
	$eco = floor($eco);
	if ($eco < 2){
	$eco == 2;
	}
	$_SESSION["eco"] = $eco;
  
	$tech = $tech + ($eco / 100);
	$tech = floor($tech);
	$_SESSION["tech"] = $tech;
  
	header("location:index.php");
?>
