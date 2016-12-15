<?php
$dbname="about";
include ("bc/mysql/connect.php");//連接資料庫

$picDir='bc/about/carousel/images/';
$carouselSe = $db->query(CarouselSe());//查詢top資料表
$display = $carouselSe->fetchAll();//顯示

foreach ($display as $key => $value) {

  $place_Name = $value["place"];
  $picNames = $value["name"];
  $display = $picDir.$picNames;

  echo "
     <div>
       <img src='$display' align='center'/>
       <span class='info'>$place_Name</span>
     </div>
   ";  
}

$db = null;
 ?>
