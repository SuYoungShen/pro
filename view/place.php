<?php
  $dbname="project";
  include ("bc/mysql/connect.php");
  include ("common.php");
  $placeSe = $db->query(PlaceSe());//查詢資料表
  $display = $placeSe->fetchAll();
  $picDir = "bc/about/place/images/";

  foreach ($display as $key => $value) {

    $id = $value["id"];
    $place_Name=$value["place"];//地區名
    $viewpoint=$value["viewpoint"];//景點名
    $attractions = $value["attractions"];//景點介紹
    $arrival = $value["arrival"];//如何到達
    $pic_name=$value["name"];//照片名
    $datetime=$value["datetime"];//時間

    if (empty($place_Name)) {
      $place_Name="稍後補資料";
    }
    if (empty($arrival)) {
      $arriva="稍後補資料";
    }
    if (($key%6) == 0) {

      echo "
      <tr>
        <td>
          <a data-toggle='modal' href='#modal-$id'>$place_Name</a>
        </td>

        <div id='modal-$id' class='modal hide fade'>
          <a class='close-modal' href='javascript:;' data-dismiss='modal' aria-hidden='true'>
            <i class='icon-remove'></i>
            </a>
          <div class='box'>
            <img src='$picDir$pic_name'>
            <h5>地區名:$place_Name</h5>
            <p>景點名:$viewpoint</p>
            <p>景點介紹:<br/>$attractions</p>
            <p>如何到達:<br/>$arrival</p>
          </div>
        </div>
      ";

    }else {

      echo "
        <td>
          <a data-toggle='modal' href='#modal-$id'>
            $place_Name
          </a>
        </td>

        <div id='modal-$id' class='modal hide fade'>
          <a class='close-modal' href='javascript:;' data-dismiss='modal' aria-hidden='true'>
            <i class='icon-remove'></i>
          </a>
          <div class='box'>
            <img src='$picDir$pic_name'>
            <h5>地區名:$place_Name</h5>
            <p>景點名:$viewpoint</p>
            <p>景點介紹:<br/>$attractions</p>
            <p>如何到達:<br/>$arrival</p>

          </div>
        </div>
      ";
    }
  }

echo "</tr>";

  $db=null;

 ?>
