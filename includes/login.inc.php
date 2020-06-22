<?php

include 'autoloader.inc.php';

if (isset($_POST['login-submit'])) {

  $mailUser = $_POST['email'];
  $password = $_POST['pass'];

  // echo $mailUser, $password;

  $userObj = new UserCredentialsControl();
  $userObj->userLoginInput($mailUser, $password);
} else {
  header("Location: ../index.php");
  exit();
}
