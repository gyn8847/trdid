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
	$mil = $mil + rand(0,1) + ($pop / 30000);
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
	$tech = $tech + ($eco / 50);
	$tech = floor($tech);
	$_SESSION["tech"] = $tech;

	elseif($tech >= 50000){
	$techstate = $_SESSION["techstate"];
	$techstate = "Futuristic";
	$_SESSION["tech"] = $techstate;
	}
	elseif($tech >= 25000){
	$techstate = $_SESSION["techstate"];
	$techstate = "Space Age";
	$_SESSION["techstate"] = $techstate;
	}
	elseif($tech >= 15000){
	$techstate = $_SESSION["techstate"];
	$techstate = "Modern Age";
	$_SESSION["techstate"] = $techstate;
	}
	elseif($tech >= 5000){
	$techstate = $_SESSION["techstate"];
	$techstate = "Industrial Age";
	$_SESSION["techstate"] = $techstate;
	}
	elseif($tech >= 2000){
	$techstate = $_SESSION["techstate"];
	$techstate = "Exploration Age";
	$_SESSION["techstate"] = $techstate;
	}
	elseif($tech >= 1000){
	$techstate = $_SESSION["techstate"];
	$techstate = "Medieval Age";
	$_SESSION["techstate"] = $techstate;
	}
	elseif($tech >= 500){
	$techstate = $_SESSION["techstate"];
	$techstate = "Iron Age";
	$_SESSION["techstate"] = $techstate;
	}
	elseif($tech >= 200){
	$techstate = $_SESSION["techstate"];
	$techstate = "Bronze Age";
	$_SESSION["techstate"] = $techstate;
	}
	elseif($tech >= 100){
	$techstate = $_SESSION["techstate"];
	$techstate = "Copper Age";
	$_SESSION["techstate"] = $techstate;
	}
  
	header("location:index.php");
?>
