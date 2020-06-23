<?php

include 'autoloader.inc.php';

if (isset($_POST['login-submit'])) {

  $mailUser = $_POST['email'];
  $password = $_POST['pass'];

  $userObj = new UserCredentialsControl();
  $userObj->userLoginInput($mailUser, $password);
}

elseif (isset($_POST['demo-login'])) {

  $demoUsername = $_POST['demousername'];

  $userObj = new UserCredentialsControl();
  $userObj->demoUserLoginInput($demoUsername);
}


else {
  header("Location: ../index.php");
  exit();
}
