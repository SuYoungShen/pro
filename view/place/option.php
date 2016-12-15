<?php

  $dbname="project";
  include("mysql/connect.php");

  $placeSe =$db->query(Place());
  $display = $placeSe->fetchAll();

  foreach ($display as $key => $value) {
    $placeName = $value[0];
    echo "<option>$placeName</option>";
  }

  $db=null;
?>
