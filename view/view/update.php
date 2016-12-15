<script type="text/javascript" src="../../assets/js/alert.js"></script>
 <?php
  $dbname="view";
  include ("../../mysql/connect.php");
  include ("../common.php");

  $picDir = "./images/";
  $picPath = "view/view/images/";
  $redirect="../../view.php";
  $msg = "";

  $ViewSe = $db->query(ViewSe());//查詢資料表
  $display = $ViewSe->fetchAll();

  foreach ($display as $key => $value) {
     $test[$key]=$value[0];
    echo $id[$key]=$value[5]."<br>";
    $time[$key]=$value[4];
  }
  for ($i=0; $i < ; $i++) { 
    # code...
  }
  if ($time[0]<$time[1]) {
    echo "time";
  }else {
    echo "string";
  }


  if (isset($_FILES["picName"])) {

      foreach ($_FILES["picName"]["tmp_name"] as $key => $value) {

        $pic_error = $_FILES["picName"]["error"][$key];//取得錯誤值

        if ($pic_error==4) {

          message("不小心按到送出齁",$redirect);

        }else if($pic_error == 0){

          $pic_name = $_FILES["picName"]["name"][$key];//抓取檔案名稱
          $pic_tmp = $_FILES["picName"]["tmp_name"][$key];//  抓取檔案
          $pic_size = $_FILES["picName"]["size"][$key];//抓取檔案大小
          $pic_tmps = strrchr($pic_name,".");//取得檔案的副檔名

          $pictmp = array('.jpg', '.JPG', '.png', '.PNG'
          , '.bmp', '.gif');//設定副檔名

          if (!in_array($pic_tmps,$pictmp)) {//檢查副檔名

            $pictmp = "不好意思,只接受".implode(" ",$pictmp)."的副檔名";
            message($pictmp,$redirect);

            break;

          }else if($pic_size > 2097152){//檢查檔案大小

            $picsize = $pic_name."檔案已超過2MB";

            message($picsize,$redirect);

            break;
          }

          date_default_timezone_set('Asia/Taipei');//設定時間為台北
          $datetime = date("Y-m-d H:i:s");//時間

          if(file_exists($picDir.$pic_name)){//檢查是否有相同檔案

            $picname = basename($pic_name,"$pic_tmps");//去除副檔名,留檔名
          //   $How = $db->query(ViewUp(
          //                             $viewpoint,
          //                             $pic_name,
          //                             $picPath,
          //                             $datetime,
          //                             $key
          //                           ));
          // if ($How) {
          //
          //   message("新增成功,資料夾裡已有名稱'+'$picname'+'的檔案",$redirect);
          //
          // }else{
          //   message("新增失敗",$redirect);
          // }

        }else {

          move_uploaded_file($pic_tmp,$picDir.$pic_name);//把檔案移到指定dir

          // foreach ($display as $key => $value) {
          //   $view_id[$key] = $value[0];
          //   $time[$key] = $value[4];
          //
          // }



          // $sum = count($display);//計算總共有幾筆資料
          // //時間比對
          // if (isset($_SESSION["viewnum"]) && isset($_SESSION["viewnums"])) {
          //
          //   $viewnum = $_SESSION["viewnum"];
          //   $viewnums = $_SESSION["viewnums"];
          //
          //   if ($viewnum > ($sum-1)) {
          //
          //     $_SESSION["viewnum"] = 0;
          //     $viewnum = $_SESSION["viewnum"];
          //
          //   }
          //
          //   if ($viewnums > ($sum-1)) {
          //     $_SESSION["viewnums"] = 0;
          //     $viewnums = $_SESSION["viewnums"];
          //
          //   }
          //   //時間比對
          //   $times = strtotime($time["$viewnum"]) < strtotime($time["$viewnums"]);
          //   $timess = strtotime($time["$viewnum"]) == strtotime($time["$viewnums"]);
          //
          //   if($times || $timess){
          //     echo "我".$view_id["$viewnum"];
          //     // $db->query(ViewUp(
          //     //                   $pic_name,
          //     //                   $picDir,
          //     //                   $datetime,
          //     //                   $view_id["$viewnum"])
          //     //                 );//執行更新指令
          //
          //   }else {
          //     echo $view_id["$viewnums"];
          //
          //     // $db->query(ViewUp(
          //     //                   $pic_name,
          //     //                   $picDir,
          //     //                   $datetime,
          //     //                   $view_id["$viewnum"])
          //     //                 );//執行更新指令
          //
          //   }


        // }//else
      }//if($pic_error)
    }//foreach
  }
}
  // if ($required) {
  //
  //   $picName = $_POST["picName"];//地區名
  //   $viewpoint = $_POST["viewpoint"];//景點名
  //   $attractions = $_POST["attractions"];//景點介紹
  //   $arrival = $_POST["arrival"];//如何到達
  //
  //   if (isset($_FILES["picName"])) {
  //
  //     foreach($_FILES["picName"]["tmp_name"] as $key => $pic_tmp_name){//檔案以陣列方式接收
  //       // echo "key:".$key;
  //       $pic_error = $_FILES["picName"]["error"][$key];//取得錯誤值
  //
  //       if ($pic_error == 4 ) {//判斷是否有錯誤
  //
  //         message("不小心按到送出了齁",$redirect);
  //
  //       }else if($pic_error == 0){
  //
  //         $pic_name = $_FILES["picName"]["name"][$key];//抓取檔案名稱
  //         $pic_tmp = $_FILES["picName"]["tmp_name"][$key];//  抓取檔案
  //         $pic_size = $_FILES["picName"]["size"][$key];//抓取檔案大小
  //         $pic_tmps = strrchr($pic_name,".");//取得檔案的副檔名
  //
  //         $pictmp = array('.jpg', '.JPG', '.png', '.PNG'
  //                         , '.bmp', '.gif');//設定副檔名
  //
  //         if (!in_array($pic_tmps,$pictmp)) {//檢查副檔名
  //
  //           $pictmp = "不好意思,只接受".implode(" ",$pictmp)."的副檔名";
  //           message($pictmp,$redirect);
  //
  //           break;
  //
  //         }else if($pic_size > 2097152){//檢查檔案大小
  //
  //           $picsize = $pic_name."檔案已超過2MB";
  //           echo "
  //           <script>
  //           var value = '$picsize';
  //           var basename= '$redirect';
  //           alerts(value, basename);
  //           </script>";
  //           break;
  //         }
  //
  //         date_default_timezone_set('Asia/Taipei');//設定時間為台北
  //         $datetime = date("Y-m-d H:i:s");//時間
  //
  //         if(file_exists($picDir.$pic_name)){//檢查是否有相同檔案
  //
  //           $picname = basename($pic_name,"$pic_tmps");//去除副檔名,留檔名
  //           $true = $db->query(PlaceIn(
  //                                       $placeName,
  //                                       $viewpoint,
  //                                       $attractions,
  //                                       $arrival,
  //                                       $pic_name,
  //                                       $picPath,
  //                                       $datetime
  //                                     ));
  //           if ($true) {
  //             message("新增成功,資料夾裡已有名稱'+'$picname'+'的檔案",$redirect);
  //
  //           }else {
  //             message("新增失敗",$redirect);
  //           }
  //
  //         }else {
  //
  //           move_uploaded_file($pic_tmp,$picDir.$pic_name);//把檔案移到指定dir
  //           $true = $db->query(PlaceIn(
  //                                       $placeName,
  //                                       $viewpoint,
  //                                       $attractions,
  //                                       $arrival,
  //                                       $pic_name,
  //                                       $picPath,
  //                                       $datetime
  //                                     ));
  //           if ($true) {
  //             message("新增成功",$redirect);
  //
  //           }else {
  //             message("新增失敗",$redirect);
  //           }
  //
  //         }//else
  //       }//if($pic_error)
  //     }//foreach
  //   }
  //
  //
  // }else {
  //   echo "失敗";
  // }
  // if (isset($_FILES)) {
  //
  //   foreach ($_FILES["picName"]["tmp_name"] as $key => $value) {
  //     $name = $_FILES["picName"]["name"][$key];
  //
  //
  //   }
  //
  // }



  if(isset($_POST["clear"])){
    $clear = $_POST["clear"];
    for ($i=0; $i < 9; $i++) {
      $clear = $db->query("UPDATE `view`
                          SET
                          `viewpoint`='',
                          `picname`='',
                          `path`='',
                          `datetime`=''
                          WHERE id='$i'");
    }

    $_SESSION["viewnum"] = 0;
    $_SESSION["viewnums"] = 1;

  }

  // $db=null;

 ?>
