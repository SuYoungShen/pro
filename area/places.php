<?php

  include ("bc/mysql/connect.php");
  include 'login/login_account_In.php';

  $placeSe = $db->query(Places());//查詢資料表
  $display = $placeSe->fetchAll();
  $picDir = "bc/view/place/images/";//照片位置

  foreach ($display as $key => $value) {
    // places
    $picName = $value["name"];
    $Pic = $picDir.$picName;
    $viewpoint = $value["viewpoint"];
    $datetime = $value["datetime"];
    // places

    // area
    // $posted = $value["posted"];
    // $message = $value["message"];
    // $site = $value["site"];
    // $datetimes = $value["datetimes"];
    // $reply = $value["reply"];
    // $replydatetime = $value["replydatetime"];
    // area
    $id = $_GET['id'];
    $viewpoints = $_GET['viewpoint'];

    if (isset($picName) && !empty($picName)) {
      $displays = $picDir.$picName;
    }else {
      $displays = $picDir."wait.jpg";
    }

    $_GET["picname"] = $displays;
    echo "<a href='#'><h2>$viewpoint</h2></a>";
    echo "
    <p>
    <img src='$displays' width='100%' alt='' />
    </p>
    ";
    echo "<p>景點介紹:<br/>".$value["attractions"]."</p>";
    echo "<p>如何到達:<br/>".$value["arrival"]."</p>";

  }


  function Places(){
    $viewpoint = $_GET["viewpoint"];
    $place = "SELECT * From
                            `places`
                      where
                            places.viewpoint='$viewpoint'
                            ";
    return $place;
  }

  $db=null;
 ?>
