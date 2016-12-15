
<link rel="stylesheet" href="bc/assets/font-awesome/4.2.0/css/font-awesome.min.css" />

<link rel="stylesheet" href="bc/assets/fonts/fonts.googleapis.com.css" />

<link rel="stylesheet" href="css/ace.min.css" />

<link rel="stylesheet" href="bc/assets/css/ace-rtl.min.css" />


<div id="myModal"  class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">會員</h3>
  </div>
  <div class="modal-body">

    <div class="accordion" id="accordion2">
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
            <h4>會員登入</h4>
          </a>
        </div>
        <div id="collapseOne" class="accordion-body collapse in">
          <div class="accordion-inner">
            <form method="post" >
              <span >
                <input type="text" name="login_account" class="form-control" placeholder="帳號" />

              </span>
              <br>
              <span>
                <input type="password" name="login_password" class="form-control" placeholder="密碼" />

              </span>

              <div class="space"></div>

              <div class="clearfix">
                <button type="submit" name="login" class="width-30  btn btn-sm btn-primary">
                  <i class="ace-icon fa fa-key"></i>
                  <span class="bigger-110">登入</span>
                </button>
              </div>

              <div class="space-4"></div>
            </form>
          </div>
        </div>
      </div>


      <div class="accordion-group" style="height:200px;overflow-y:scroll;overflow-x:hidden;background-color:white;">
        <div class="accordion-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
            <h4>會員註冊</h4>
          </a>
        </div>
        <div id="collapseTwo" class="accordion-body collapse">
          <div class="accordion-inner">
            <p> 輸入基本資料 (全部為必填)</p>

            <form class="form-horizontal" role="form" method="post">

              <label class="block clearfix">
                <span class="block input-icon">
                  <input type="email" name="email" class="form-control" placeholder="Email" />
                </span>
              </label>

              <label class="block clearfix">
                <span class="block input-icon">
                  <input type="text" name="name" class="form-control" placeholder="姓名" />
                </span>
              </label>

              <label class="block clearfix">
                <span class="block input-icon">
                  <input type="text" name="account" class="form-control" placeholder="帳號(最少4碼)" />
                </span>
              </label>

              <label class="block clearfix">
                <span class="block input-icon ">
                  <input type="password" name="password" class="form-control" placeholder="密碼(最少5碼)" />
                </span>
              </label>

              <label class="block clearfix">
                <span class="block input-icon ">
                  <input type="password" name="apassword"  class="form-control" placeholder="再輸入一次密碼"/>
                </span>
              </label>

              <div class="space-24"></div>

              <div class="clearfix">
                <button type="reset" class="width-30 pull-left btn btn-sm">
                  <i class="ace-icon fa fa-refresh"></i>
                  <span class="bigger-110">重填</span>
                </button>

                <button type="submit" name="registered" class="width-30 pull-right btn btn-sm btn-success">
                  <span class="bigger-110">註冊</span>
                  <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">關閉</button>
    <button class="btn btn-primary">儲存變更</button>
  </div>
</div>

<!-- <div class="login-layout modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="loginForm" aria-hidden="false">
  <div class="modal-body">
    <div class="main-container">
      <div class="main-content">

        <div class="col-sm-10 col-sm-offset-1">
          <div class="login-container">

            <div class="space-6"></div>

            <div class="position-relative">
              <div id="login-box" class="login-box visible widget-box no-border">
                <div class="widget-body">

                  <div class="widget-main">
                    <h4 class="header blue lighter bigger">
                      <i class="ace-icon fa fa-coffee green"></i>
                      登入
                    </h4>

                    <div class="space-6"></div>

                    <form method="post">
                      <fieldset>
                        <label class="block clearfix">
                          <span class="block input-icon input-icon-right ">
                            <input type="text" name="login_account" class="form-control" placeholder="帳號" />
                            <i class="ace-icon fa fa-user"></i>
                          </span>
                        </label>

                        <label class="block clearfix">
                          <span class="block input-icon input-icon-right">
                            <input type="password" name="login_password" class="form-control" placeholder="密碼" />
                            <i class="ace-icon fa fa-lock"></i>
                          </span>
                        </label>

                        <div class="space"></div>

                        <div class="clearfix">


                          <button type="submit" name="login" class="width-30 pull-right btn btn-sm btn-primary">
                            <i class="ace-icon fa fa-key"></i>
                            <span class="bigger-110">登入</span>
                          </button>
                        </div>

                        <div class="space-4"></div>
                      </fieldset>
                    </form>
                  </div>

                  <div class="toolbar clearfix">

                    <div>
                      <a href="#" data-target="#signup-box" class="user-signup-link">
                        註冊
                        <i class="ace-icon fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div id="signup-box" class="signup-box widget-box no-border">
                <div class="widget-body">
                  <div class="widget-main">
                    <h4 class="header green lighter bigger">
                      <i class="ace-icon fa fa-users blue"></i>
                      註冊會員
                    </h4>

                    <div class="space-6"></div>
                    <p> 輸入基本資料 (全部為必填)</p>

                    <form class="form-horizontal" role="form" method="post">

                      <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                          <input type="email" name="email" class="form-control" placeholder="Email" />
                          <i class="ace-icon fa fa-envelope"></i>
                        </span>
                      </label>

                      <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                          <input type="text" name="name" class="form-control" placeholder="姓名" />
                          <i class="ace-icon fa fa-user"></i>
                        </span>
                      </label>

                      <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                          <input type="text" name="account" class="form-control" placeholder="帳號(最少4碼)" />
                          <i class="ace-icon fa fa-user"></i>
                        </span>
                      </label>

                      <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                          <input type="password" name="password" class="form-control" placeholder="密碼(最少5碼)" />
                          <i class="ace-icon fa fa-lock"></i>
                        </span>
                      </label>

                      <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                          <input type="password" name="apassword"  class="form-control" placeholder="再輸入一次密碼" />
                          <i class="ace-icon fa fa-retweet"></i>
                        </span>
                      </label>

                      <div class="space-24"></div>

                      <div class="clearfix">
                        <button type="reset" class="width-30 pull-left btn btn-sm">
                          <i class="ace-icon fa fa-refresh"></i>
                          <span class="bigger-110">重填</span>
                        </button>

                        <button type="submit" name="registered" class="width-30 pull-right btn btn-sm btn-success">
                          <span class="bigger-110">註冊</span>

                          <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                        </button>
                      </div>

                    </form>
                  </div>

                  <div class="toolbar center">
                    <a href="#" data-target="#login-box" class="back-to-login-link">
                      <i class="ace-icon fa fa-arrow-left"></i>
                      回登入
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div> -->



    <!-- <script src="bc/assets/js/jquery.2.1.1.min.js"></script> -->

    <!--[if !IE]> -->
    <script type="text/javascript">
      // window.jQuery || document.write("<script src='bc/assets/js/jquery.min.js'>"+"<"+"/script>");
    </script>

    <!-- <![endif]-->

    <!--[if IE]>
  <script type="text/javascript">
  window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
  </script>
  <![endif]-->
    <script type="text/javascript">
      if('ontouchstart' in document.documentElement) document.write("<script src='bc/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
      jQuery(function($) {
       $(document).on('click', '.toolbar a[data-target]', function(e) {
        e.preventDefault();
        var target = $(this).data('target');
        $('.widget-box.visible').removeClass('visible');//hide others
        $(target).addClass('visible');//show target
       });
      });



      //you don't need this, just used for changing background
      jQuery(function($) {
       $('#btn-login-dark').on('click', function(e) {
        $('body').attr('class', 'login-layout');
        $('#id-text2').attr('class', 'white');
        $('#id-company-text').attr('class', 'blue');

        e.preventDefault();
       });
       $('#btn-login-light').on('click', function(e) {
        $('body').attr('class', 'login-layout light-login');
        $('#id-text2').attr('class', 'grey');
        $('#id-company-text').attr('class', 'blue');

        e.preventDefault();
       });
       $('#btn-login-blur').on('click', function(e) {
        $('body').attr('class', 'login-layout blur-login');
        $('#id-text2').attr('class', 'white');
        $('#id-company-text').attr('class', 'light-blue');

        e.preventDefault();
       });

      });
    </script>
<!-- </div> -->
<!--  Login form -->
<!-- </body> -->
