<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $_GET["viewpoint"]; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">

    <script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src='NowTime.js'></script><!--現在時間-->
    <!-- Le fav and touch icons -->
    <?php
      session_start();
      include("bc/mysql/connect.php");
      include("login/check_login.php");

      // $Back = "area.php?id=39&viewpoint=".$_GET['viewpoint']."&place_name=".$_GET['place_name']."";
      $Back = "view.php";
      Login($db,$Back);
      Login_Out($Back);

      include("ico.php");
     ?>
</head>

<body>

  <!--Header-->
  <header class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <a id="logo" class="pull-left" href="index.php"></a>

      <div class="nav-collapse collapse pull-right">

        <ul class="nav">
          <li>
            <a href="index.php">首頁</a>
          </li>
          <li>
            <a href="about.php">認識高雄</a>
          </li>
          <li class="dropdown active">
            <a href="view.php" class="dropdown-toggle" data-toggle="dropdown">景點
              <i class="icon-angle-down"></i>
            </a>
            <div class="dropdown-menu">
              <table class="table table-hover ">
                <tr>
                  <td><a href="view.php">首頁</a></td>
                  <!-- <td><a href="area.php">地區名</a></td> -->
                  <?php
                    include ("area/place.php");
                    function Placess(){
                      $place = "SELECT * FROM `places` GROUP BY place";
                      return $place;
                    }
                   ?>
                </tr>
              </table>
            </div>
          </li>

          <li><a href="forum.php">討論區</a></li>
          <!--<li><a href="contact-us.html">Contact</a></li>-->
          <?php
            Member_Information();
           ?>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  </header>

 <!-- /header -->

 <section class="title">
   <div class="container">
     <div class="row-fluid">
       <div class="span6">
         <h1><?php echo $_GET["viewpoint"]; ?></h1>
       </div>
       <div class="span6">
         <ul class="breadcrumb pull-right">
           <li><a href="index.php">首頁</a> <span class="divider">/</span></li>
           <li><a href="view.php">景點首頁</a> <span class="divider">/</span></li>
           <li class="active"><?php echo $_GET["viewpoint"]; ?></li>
         </ul>
       </div>
     </div>
   </div>
 </section>

 <div class="container">
   <div class="center">
     <h3>高雄地區</h3>
     <!--<p class="lead">Look at some of the recent projects we have completed for our valuble clients</p>-->
   </div>

   <div class="gap"></div>

   <table class="table table-striped table-bordered table-hover">
    <?php
      include ("area/place.php");
     ?>
   </table>

 </div>
	<hr>

  <section id="about-us" class="container">
    <div class="row-fluid">
      <div class="span8">
        <div class="blog">
          <div class="blog-item well">
            <?php
              include ("area/places.php");
             ?>
            <p>&nbsp;</p>
            <div id="comments" class="comments">

              <h4>回覆</h4>
              <div class="comments-list">
                <div class="media box">
                  <?php
                    include("area/reply.php");
                   ?>
                 </div>
              </div>
              <br/>

               <div class="comment-form">
                <h4>請留言</h4>

                <form name="comment-form" method="post" action="bc/message/area/insert.php">
                  <div class="row-fluid">
                    <div class="span4">
                      <?php
                        include 'login/login_account_In.php';
                        $id = $_GET["id"];
                        $place_name = $_GET["place_name"];
                        $viewpoint =$_GET["viewpoint"];
                        $Site = $_SERVER['PHP_SELF']."?id=$id&place_name=$place_name&viewpoint=$viewpoint";
                        $Pic = $_GET["picname"];
                        $db = null;
                       ?>
                       <input type='hidden' name='id' value="<?php echo $id ?>">
                       <input type='hidden' name='place_name' value="<?php echo $place_name ?>">
                       <input type='hidden' name='viewpoint' value="<?php echo $viewpoint ?>">
                       <input type='hidden' name='pic' value="<?php echo $Pic ?>">
                       <input type="hidden" name="WebSite" value="<?php echo $Site?>">
                       <input type='text' name='posted'  class='input-block-level' value="<?php echo $login_names?>" placeholder='姓名(抓取會員名)' />
                    </div>
                    <div class="span4">
                      <input type="email" name="email"  class="input-block-level" placeholder="Email" value="<?php echo $email; ?>"/>
                    </div>
                    <div class="span4">
                      <textarea type="url" name="site"  class="input-block-level" placeholder="網址" /></textarea>
                    </div>
                    <script type="text/javascript">
                      document.cookie="datetime="+getNowTime();
                    </script>
                  </div>
                  <textarea rows="10" name="message" id="message" class="input-block-level" placeholder="有什麼話要說..."></textarea>
                  <input type="submit" value="送出" class="btn btn-large btn-primary" />
                  <input type="reset" value="重置" class="btn btn-large btn-primary" />
                </form>
              </div>
              <!-- End Comment Form -->
            </div>
          </div>
          <!-- End Blog Item -->
        </div>

      </div>
      <div class="span4">
        <div class="center">
          <h3>TOP6</h3>
        </div>

        <?php
        include("marquee-up.php");
        ?>
      </div>
    </div>
  </section>




<!--Footer-->
<?php
  include("footer.php");
 ?>
<!--/Footer-->

<!--  Login form -->
<?php
  include("login-form.php");
 ?>
<!--  /Login form -->
<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
