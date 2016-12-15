<?php
if (isset($_SESSION["login_account"]) && !empty($_SESSION["login_account"])) {
  include("bc/mysql/connect.php");

  $login_account = $_SESSION["login_account"];
  $logins = $db->query("SELECT name,email FROM member WHERE account='".$login_account."'");

  while ($login_name = $logins->fetch()) {
    $login_names = $login_name["name"];
    $email = $login_name["email"];
  }
}else {
  $login_names="";
  $email = "";
}
 ?>
