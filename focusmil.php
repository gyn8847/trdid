<?php

	session_start();
  
	$year = $_SESSION["year"];
	$year++;
	$year = floor($year);
  $_SESSION["year"] = $year;
	$pop = $_SESSION["pop"];
  
	$pop = $pop + rand(3,15) + ($pop / 1500);
	$pop = floor($pop);
	$_SESSION["pop"] = $pop;
  
	$mil = $_SESSION["mil"];
	$mil = $mil + rand(0,2) + ($pop / 15000);
	$mil = floor($mil);
	$_SESSION["mil"] = $mil;
  
	$eco = $_SESSION["eco"];
	$eco = $eco + $tech + rand(1,4) - ($pop / 5000);
	$eco = floor($eco);
	if ($eco < 2){
	$eco == 2;
	}
	$_SESSION["eco"] = $eco;
  
	$tech = $_SESSION["tech"];
	$tech = $tech + ($eco / 100);
	$tech = floor($tech);
	$_SESSION["tech"] = $tech;
  
	header("location:index.php");
?>