<?php
  include 'bc/mysql/connect.php';

  $FavSe = $db->query(FavSe($accounts));
  $Dislpay = $FavSe->fetchAll();
  // var_dump($Dislpay);
  $WebSite="/project/index.php";

  foreach ($Dislpay as $key => $value) {

    $Account = $value["Account"];//帳號
    $ViewPoint[$key] = $value["place"];//地區名
    $PicName = $value["PicName"];//照片名
    $PicPath = $value["PicPath"];//照片位置    
    $Datetime = $value["Datetime"];//時間
    $Webs = $Web[$key] = Url($db,$ViewPoint[$key]);//網站位址

    echo "
      <div class='accordion' id='accordion2'>
        <div class='accordion-group'>
          <div class='accordion-heading'>
            <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#Favorite$key'>
              $ViewPoint[$key]
            </a>

        </div>
          <div id='Favorite$key' class='accordion-body collapse'>
            <div class='accordion-inner'>
              <img src='$PicPath$PicName'>
              <a href='$Webs' onclick='Urls(\"$Web[$key]\")'>$ViewPoint[$key]</a><!--檢查web得值-->
              <input type='hidden' id='web' value='$Webs'>
              <a onclick='Delete(
                                  \"$Account\",
                                  \"$ViewPoint[$key]\",
                                  \"$PicName\",
                                  \"$PicPath\",
                                  \"$WebSite\"
                                  )'>
              <i class='icon-remove pull-right'></i></a><!--刪除-->
            </div>
          </div>
        </div>
      </div>
    ";

  }

  function FavSe($account){
    $FavSe = "SELECT * FROM `favorite` WHERE `Account`='".$account."'";
    return $FavSe;
  }

  function Url($db,$ViewPoint){

    $PlaceSe = "SELECT `id`,`place`,`viewpoint`  FROM `places` WHERE `viewpoint`='".$ViewPoint."'";
    $PlaceSes=$db->query($PlaceSe);
    $Displays = $PlaceSes->fetchAll();

    foreach ($Displays as $key => $value) {
      $id = $ids[$key] = $value["id"];
      $viewpoint = $viewpoints[$key] = $value["viewpoint"];
      $place_name = $place_names[$key] = $value["place"];
    }

    if (isset($viewpoints[0])) {
      return $Web="areas.php?id=$ids[0]&viewpoint=$viewpoints[0]";
    }else {
      return $Web='#';
    }

  }

  $db=null;
 ?>
