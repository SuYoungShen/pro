<?php
  $dbname="project";
  include("../../bc/mysql/connect.php");

  $true = isset($_POST["Place_Name"]) &&
          !empty($_POST["Place_Name"]) &&
          isset($_POST["ViewPoint"]) &&
          !empty($_POST["ViewPoint"]) &&
          isset($_POST["Posted"]) &&
          !empty($_POST["Posted"]) &&
          isset($_POST["AreaMessage"]) &&
          !empty($_POST["AreaMessage"]) &&
          isset($_POST["AreaDate"]) &&
          !empty($_POST["AreaDate"]) ;

  if ($true) {

    $Place_Name = $_POST["Place_Name"];
    $ViewPoint = $_POST["ViewPoint"];
    $Posted = $_POST["Posted"];
    $AreaMessage = $_POST["AreaMessage"];
    $AreaDate = $_POST["AreaDate"];

    $trues = $db->query(
                        FavDe(
                          $Place_Name,
                          $ViewPoint,
                          $Posted,
                          $AreaMessage,
                          $AreaDate
                        )
                      );

    if ($trues == true) {
      echo "刪除成功";
    }else {
      echo "刪除失敗";
    }
  }else {
    echo "沒值~是要刪什麼~~~";
  }

  function FavDe($Place_Name, $ViewPoint, $Posted, $AreaMessage, $AreaDate){
    $FavDe = "DELETE FROM `area` WHERE
                                          `placename` = '".$Place_Name."' AND
                                          `viewpoint` = '".$ViewPoint."' AND
                                          `posted` = '".$Posted."' AND
                                          `message` = '".$AreaMessage."' AND
                                          `datetime` = '".$AreaDate."'
                                          ";
    return $FavDe;
  }
  $db=null;
 ?>
