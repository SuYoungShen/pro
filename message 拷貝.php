<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>討論區</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/sl-slide.css">

  <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

  <!-- 自行載入 -->

		<!-- <script type="text/javascript" src="message/area/js/validate.js"></script> -->
		<!-- <script type="text/javascript" src="message/area/js/fun.js"></script> -->
    <script type="text/javascript" src='NowTime.js'></script>
    <script src="js/vendor/jquery-1.9.1.min.js"></script>
		<!-- <script type="text/javascript" src="assets/js/alert.js"></script> -->

    <script type="text/javascript" src="forum/js/fun.js"></script>
  <!-- 自行載入 -->

  <!-- Le fav and touch icons -->
  <?php
  session_start();
  include("bc/mysql/connect.php");
  include("login/check_login.php");

  $Back = $_SERVER['PHP_SELF'];
  Login($db,"message.php");
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
        <!--
        <a id="logo" class="pull-left" href="index.html"></a>
      -->
      <div class="nav-collapse collapse pull-right">
        <form class="navbar-search pull-left" action="" method="">
          <input type="text" class="search-query" placeholder="要去哪ㄜ...?">
        </form>

        <ul class="nav">
          <li>
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
                  <td><a href="area.php">地區名</a></td>
                </tr>
              </table>
            </div>
          </li>

          <li class="active"><a href="forum.php">討論區</a></li>
          <!--<li><a href="contact-us.html">Contact</a></li>-->
          <li class="login">
            <?php
              Member_Information();
             ?>
          </li>
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
          <h1>討論區</h1>
        </div>
        <div class="span6">
          <ul class="breadcrumb pull-right">
            <li>
              <a href="index.html">首頁</a>
              <span class="divider">/</span>
            </li>

            <li class="active">討論區</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- / .title -->

  <!-- Career -->
  <section id="career" class="container">
    <div class="container">
      <h2>想說什麼就說什麼</h2>

      <div class="row">
        <form class="form-horizontal" method="post"  role="form" action="bc/message/forum/insert.php">
          <div class="span12">
            <input type="text" id="theme" name="theme" placeholder="主題"  class="span4"/>
            <input type="text" id="posted" name="posted" placeholder="發表人" class="span4" />
            <input type="email" id="email" name="email" placeholder="email" class="span4"/>
          </div>

          <div class="span12">
            <textarea type="text" id="message" name="message" placeholder="想說什麼" rows="10"class="span12" /></textarea>
          </div>
          <!-- <script type="text/javascript">
            document.cookie="datetime="+getNowTime();
          </script> -->
          <div class="span2">
            <input type="submit" class="btn btn-large btn-primary" value="送出">
          </div>
        </form>
    </div>
    </div>
    <br/>

  </section>
<!-- /Career -->

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

<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
