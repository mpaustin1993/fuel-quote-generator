<?php

include 'autoloader.inc.php';

$userObj = new UserCredentialsControl();

if (isset($_POST['resetpwd-submit'])) {

  $userEmail = $_POST['email'];

  if (empty($userEmail)) {
    header("Location: ../forgotpassword.php?error=emptyfield");
    exit();
  }
  else {
    $userObj->userResetPwdEmail($userEmail);
  }


}
else {
  header("Location: ../forgotpassword.php");
}
