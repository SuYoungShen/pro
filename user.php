<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>使用者介面</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/sl-slide.css">

  <script type="text/javascript" src="favorite/js/delete.js"></script>
  <script type="text/javascript" src="message/js/delete.js"></script>
  <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="bc/assets/js/alert.js"></script>
  <script type="text/javascript" src="user/js/CheckWeb.js"></script>

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
    }
    include("ico.php");
  ?>

</head>

<body>
<!--Header-->
<?php
  include("header.php");
 ?>
<!-- /header -->

<!--Slider輪播-->

<section id="blackbackground">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
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

</div>
<!-- /slider-wrapper -->
</section>
<!--/Slider-->

<section class="container">
  <form>
    <fieldset>
      <div class="row-fluid">
        <div class="span6">
          <legend>我的最愛</legend>
          <table class="table table-bordered" >
            <tr>
              <td>
                <?php
                  include ("user/favorite.php");
                ?>
              </td>
            </tr>
          </table>
        </div>

        <div class="span6">
          <legend>留言區</legend>

          <table class="table table-bordered">
            <tr>
              <td>
                <?php
                include 'user/messages.php';
                ?>
              </td>
            </tr>
          </table>
        </div>
      </fieldset>
    </form>
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
<!-- 彈跳視窗 -->
<script src="bc/assets/js/bootbox.min.js"></script>
<!-- 彈跳視窗 -->
<!-- <script src="js/vendor/jquery-1.9.1.min.js"></script> -->
<script type="text/javascript" src="js/jquery.js"></script>
<script src="bc/assets/js/bootstrap.min.js"></script>

<script src="js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="js/jquery.ba-cond.min.js"></script>
<script src="js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script src="js/slider.js"></script>
<!-- /SL Slider -->
<!-- 最新編譯和最佳化的 JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> -->
</body>
</html>
