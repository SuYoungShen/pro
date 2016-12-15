<?php
  $dbname="project";
  include ("bc/mysql/connect.php");
  include ("common.php");

  $aboutse = $db->query(AboutSe());

  $AboutDisplay = $aboutse->fetchAll();

  foreach ($AboutDisplay as $key => $AboutDisplays) {
  }

  if (!isset($AboutDisplays["about"])) {
    $AboutDisplays["about"]="暫無資料";
  }
  echo $AboutDisplays["about"];

  $db=null;
?>
