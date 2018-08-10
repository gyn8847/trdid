<?php
  session_start();
  
  $civpointeco = $_SESSION["civpointeco"];
  $civpoints = $_SESSION["civpoints"];
  if($civpointeco >= 1){
  $civpointpop--;
  $civpoints++;
  }
  $_SESSION["civpointeco"] = $civpointeco;
  $_SESSION["civpoints"] = $civpoints;
  
  header("location:index.php");
  
 ?>
