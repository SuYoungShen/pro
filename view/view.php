<?php

  $dbname="project";
  include ("bc/mysql/connect.php");
  // include("common.php");
  $viewse = $db->query(ViewSe());//查詢資料表
  $display = $viewse->fetchAll();

  $picDir = "bc/view/view/images/";//照片位置
  $WebSite = $_SERVER["PHP_SELF"];//網站位置
  $redirect="view.php";
  $msg = "";

  echo "
  <div class='preview'>
    <div class='row'>
    ";

  foreach ($display as $keys => $value) {

    $id = $value["id"];
    $viewpoint=$value["viewpoint"];
    $picnames=$value["picname"];
    // $picpath=$path[$key] = $value["path"];
    $datetime = $value["datetime"];

    if (empty($viewpoint)) {
          $viewpoint = "燒等補資料";
        }

    if (!empty($picnames)) {
      $displays = $picDir.$picnames;
    }else {
      $displays = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";

    }
    if ($keys<3) {
      Display($displays, $id, $accounts, $viewpoint, $picnames, $picDir, $WebSite);
    }
  }
  echo "
    </div>

    <div class='row'>
    ";
    foreach ($display as $keys => $value) {

      $id = $value["id"];
      $viewpoint=$value["viewpoint"];
      $picnames=$value["picname"];
      // $picpath=$path[$key] = $value["path"];
      $datetime = $value["datetime"];

      if (empty($viewpoint)) {
            $viewpoint = "燒等補資料";
          }

      if (!empty($picnames)) {
        $displays = $picDir.$picnames;
      }else {
        $displays = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";

      }

    if ($keys>=3 && $keys<6) {
      Display($displays, $id, $accounts, $viewpoint, $picnames, $picDir, $WebSite);
    }
  }
  echo "
    </div>

    <div class='row'>
    ";
    foreach ($display as $keys => $value) {

      $id = $value["id"];
      $viewpoint=$value["viewpoint"];
      $picnames=$value["picname"];
      // $picpath=$path[$key] = $value["path"];
      $datetime = $value["datetime"];

      if (empty($viewpoint)) {
            $viewpoint = "燒等補資料";
          }

      if (!empty($picnames)) {
        $displays = $picDir.$picnames;
      }else {
        $displays = "http://img.ltn.com.tw/2016/new/jul/13/images/bigPic/400_400/phpyq9Xeu.jpg";

      }

    if ($keys>=6 && $keys<10) {
      Display($displays, $id, $accounts, $viewpoint, $picnames, $picDir, $WebSite);
    }
  }

  echo "
    </div>
  </div>
  ";

  function Display($displays, $id, $accounts, $viewpoint, $picnames, $picDir, $WebSite){
    echo "
      <div class='span4'>
        <img alt=' ' src='$displays' >
        <div class='overlay'></div>
        <div class='links'>
          <a data-toggle='modal' href='#modal-$id'>
            <i class='icon-eye-open'></i>
            </a><a href='#'><i class='icon-heart' onclick='Insert(
                                                                  \"$accounts\",
                                                                  \"$viewpoint\",
                                                                  \"$picnames\",
                                                                  \"$picDir\",
                                                                  \"$WebSite\"
                                                                  )'></i></a>
        </div>
      </div>

      <div id='modal-$id' class='modal hide fade'>
        <a class='close-modal' href='javascript:;' data-dismiss='modal' aria-hidden='true'>
		<i class='icon-remove'></i></a>
        <div class='modal-body'>
          <img alt=' ' src='$displays' >
          <h5>$viewpoint</h5>
        </div>
      </div>
    ";
  }

  if(isset($_POST["clear"])){
    $clear = $_POST["clear"];
    for ($i=0; $i < 9; $i++) {
      $clear = $db->query("UPDATE view SET
                        picname = ' ',
                        path='',
                        datetime = ' '
                      WHERE
                        '".$i."'
                      ");
    }

    $_SESSION["viewnum"] = 0;
    $_SESSION["viewnums"] = 1;

  }

  $db=null;
?>
