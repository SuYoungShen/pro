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

        <li><a href="forum.php">討論區</a></li>
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
