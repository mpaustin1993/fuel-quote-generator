<?php

include 'autoloader.inc.php';

if (isset($_POST['signup-submit'])) {

  $email = $_POST['email'];
  $username = $_POST['uid'];
  $password = $_POST['pwd'];
  $confirmPwd = $_POST['pwd-confirm'];

  $usersObj = new UserCredentialsControl();

  $usersObj->validateUserInput($email, $username, $password, $confirmPwd);
} else {
  header("Location: ../signup.php");
}
