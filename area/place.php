<?php
  include ("bc/mysql/connect.php");

  $placeSe = $db->query(Placess());//查詢資料表
  $display = $placeSe->fetchAll();
  $picDir = "bc/about/place/images/";

// echo "<tr>";

  foreach ($display as $key => $value) {

    $id = $value["id"];
    $viewpoint = $value["viewpoint"];
    $place_Name = $value["place"];//地區名
    $Introduction = $value["attractions"];//地區介紹
    // $pic_name=$value["name"];//照片名
    // $datetime=$value["datetime"];//時間

    if (empty($place_Name)) {
      $place_Name="暫無資料";
    }

    if (($key%6) == 0) {

      echo "
      <tr>
        <td>
          <a href='area.php?id=$id&place_name=$place_Name'>$place_Name</a>
        </td>
      ";

    }else {

      echo "
        <td>
          <a href='area.php?id=$id&place_name=$place_Name'>
            $place_Name
          </a>
        </td>
      ";
    }
  }

echo "</tr>";

  $db=null;



 ?>
