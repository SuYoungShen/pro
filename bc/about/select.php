<?php
  session_start();
  include '../mysql/connect.php';
  $_SESSION["id"] = $_POST["id"];
  $arrayName = array("Name"=>$_SESSION["id"]);
  echo json_encode($arrayName);
 ?>
