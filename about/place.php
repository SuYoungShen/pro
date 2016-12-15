<?php
  $dbname="project";
  include ("bc/mysql/connect.php");

  $placeSe = $db->query(PlaceSe());//查詢資料表
  $display = $placeSe->fetchAll();
  $picDir = "bc/about/place/images/";

// echo "<tr>";

  foreach ($display as $key => $value) {

    $place_Name=$value["place"];//地區名
    $Introduction=$value["Introduction"];//地區介紹
    $pic_name=$value["name"];//照片名
    $datetime=$value["datetime"];//時間

    if (empty($place_Name)) {
      $place_Name = "暫無資料";
    }

    if (($key%6) == 0) {

      echo "
      <tr>
        <td>
          <a data-toggle='modal' href='#modal-$key'>$place_Name</a>
        </td>

        <div id='modal-$key' class='modal hide fade'>
          <a class='close-modal' href='javascript:;' data-dismiss='modal' aria-hidden='true'>
            <i class='icon-remove'></i>
            </a>
          <div class='box'>
            <img src='$picDir$pic_name'>
            <h5>$place_Name</h5>
            <p>$Introduction</p>
          </div>
        </div>
      ";

    }else {

      echo "
        <td>
          <a data-toggle='modal' href='#modal-$key'>
            $place_Name
          </a>
        </td>

        <div id='modal-$key' class='modal hide fade'>
          <a class='close-modal' href='javascript:;' data-dismiss='modal' aria-hidden='true'>
            <i class='icon-remove'></i>
          </a>
          <div class='box'>
            <img src='$picDir$pic_name'>
            <h5>$place_Name</h5>
            <p>$Introduction</p>
          </div>
        </div>
      ";    
    }
  }

echo "</tr>";

  $db=null;

 ?>
