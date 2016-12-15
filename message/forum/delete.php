<?php
  $dbname="project";
  include("../../bc/mysql/connect.php");

  $true = isset($_POST["Theme"]) &&
          !empty($_POST["Theme"]) &&
          isset($_POST["ForumPosted"]) &&
          !empty($_POST["ForumPosted"]) &&
          isset($_POST["ForumMessages"]) &&
          !empty($_POST["ForumMessages"]) &&
          isset($_POST["ForDate"]) &&
          !empty($_POST["ForDate"]) ;

  if ($true) {

    $Theme = $_POST["Theme"];
    $ForumPosted = $_POST["ForumPosted"];
    $ForumMessages = $_POST["ForumMessages"];
    $ForDate = $_POST["ForDate"];

    $trues = $db->query(
                        ForDe(
                          $Theme,
                          $ForumPosted,
                          $ForumMessages,                          
                          $ForDate
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

  function ForDe($Theme, $ForumPosted, $ForumMessages, $ForDate){
    $FavDe = "DELETE FROM `forum` WHERE
                                          `theme` = '".$Theme."' AND
                                          `posted` = '".$ForumPosted."' AND
                                          `message` = '".$ForumMessages."' AND
                                          `datetime` = '".$ForDate."'
                                          ";
    return $FavDe;
  }
  $db=null;
 ?>
