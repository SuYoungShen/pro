<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->

<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>高雄景點</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->

    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- bootstrap & fontawesome -->
    <!-- <link rel="stylesheet" href="bc/assets/css/bootstrap.min.css" /> -->
    <script type="text/javascript" src="js/alert.js"></script>
    <script type="text/javascript" src="favorite/js/insert.js"></script>

    <!-- ace styles -->

    <!-- 自行填入 -->
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="login/js/registered.js"></script>
    <!-- 自行填入 -->

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ace-part2.min.css" />
    <![endif]-->
    <!-- Le fav and touch icons -->
    <?php
      session_start();
      include("bc/mysql/connect.php");
      include("login/check_login.php");
      $Back = "index.php";
      Login($db,$Back);
      Login_Out($Back);

      if (isset($_SESSION["login_account"]) && !empty($_SESSION["login_account"])) {
         $accounts = $_SESSION["login_account"];
      }else {
        $accounts = "";
      }//加入我的最愛使用

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

        <a class="pull-left " href="index.php"><img src='images/logo.png' width="100%" alt='' /></a>

        <div class="nav-collapse collapse pull-right">

          <ul class="nav">
            <li class="active">
              <a href="index.php">首頁</a>
            </li>
            <li>
              <a href="about.php">認識高雄</a>
            </li>
            <li class="dropdown">
              <a href="view.php" class="dropdown-toggle" data-toggle="dropdown">景點
                <i class="icon-angle-down"></i>
              </a>
              <div class="dropdown-menu">
                <table class="table table-hover ">
                  <tr >
                    <td><a href="view.php">首頁</a></td>
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
            <?php
              Member_Information();
            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </header>
  <!-- /header -->

  <!--Slider輪播-->
  <section id="blackbackground">
    <div class="container">
      <div class="row">
        <div class="span12">

          <div id="myCarousel" class="carousel slide " data-ride="carousel" data-interval="3000">
            <!-- data-ride="carousel" 屬性用來標記頁面載入後開始的輪播動畫。 data-interval="3000"每毫秒做東做-->
            <ol class="carousel-indicators">
              <?php
                include 'index/slider/slider.php';
                counts($display);
              ?>
            </ol>

            <div class="carousel-inner" align='center'>
              <?php
                display($display, $sliderdir);
              ?>
            </div>

            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Slider輪播-->

  <!--熱門排行-->
  <!-- <div class="container" > -->
    <section id="recent-works">
      <div class="container">
        <div class="row">
          <div class="center">
            <h3>TOP6</h3>
            <!--<p class="lead">高雄熱門景點</p>-->
          </div>
          <div class="gap"></div>
          <div class="gallery span12">
            <?php
            include 'index/top6/top6.php';
            ?>
          </div>
        </div>
      </div>
    </section>
  <!-- </div> -->
  <!--熱門排行-->

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
    <script src="bc/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/vendor/jquery-1.9.1.min.js"></script>
    <script src="js/jquery.ba-cond.min.js"></script>
    <script src="js/jquery.slitslider.js"></script>
    <script src="js/main.js"></script>
    <!-- SL Slider -->
    <script type="text/javascript" src="js/slider.js"></script>
  <!-- /SL Slider -->

  </body>

  </html>
