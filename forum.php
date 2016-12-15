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

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">

  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/sl-slide.css">

  <script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.js"></script>
  <script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

  <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

  <?php
    session_start();
    include("bc/mysql/connect.php");
    include("login/check_login.php");
    include("ico.php");

    $Back = $_SERVER['PHP_SELF'];
    Login($db,$Back);
    Login_Out($Back);
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

        <a id="logo" class="pull-left" href="index.html"></a>

      <div class="nav-collapse collapse pull-right">

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
                  <?php
                  include ("area/place.php");
                  function Placess(){
                    $place = "SELECT * From `places`";
                    return $place;
                  }
                  ?>
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
              <a href="index.php">首頁</a>
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
  <section id="career">
    <div class="span12">
      <ul class="gallery col-4">
        <li>
          <div class="preview">
            <a href="message.php">
              <input type="submit" class="btn btn-mini btn-primary" value="發表主題">
            </a>
          </div>
        </li>
      </div>
      <br/>
      <p>&nbsp;</p>

      <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
        <thead>
          <tr>
            <th>主題</th>
            <th>發表人</th>
            <th>Email</th>
            <th>留言</th>
            <th>回覆</th>
            <th>最新時間</th>
          </tr>
        </thead>
        <tbody>

			<?php
              include ("forum/forum.php");
             ?>

        </tbody>
       </table>



  </section>
  <!-- Career -->

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
