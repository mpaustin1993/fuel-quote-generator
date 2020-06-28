<?php

include 'autoloader.inc.php';

if (isset($_POST['password-update'])) {

  $userObj = new UserCredentialsControl();

  $userId = $_POST['uid'];
  $currentPwd = $_POST['currentpass'];
  $newPwd = $_POST['newpassword'];
  $confirmNewPwd = $_POST['newpassword-repeat'];

  if (empty($currentPwd) || empty($newPwd) || empty($confirmNewPwd)) {
    header("Location: ../passwordmanager.php?error=emptyfield");
    exit();
  }
  elseif ($newPwd !== $confirmNewPwd) {
    header("Location: ../passwordmanager.php?error=newpwdnotmatch");
    exit();
  }
  else {
    $userObj->usersPwdUpdateInput($userId, $currentPwd,$newPwd);
  }

}
elseif (isset($_POST['createnewpwd'])) {

  $userObj = new UserCredentialsControl();

  $selector = $_POST['selector'];
  $validator = $_POST['validator'];
  $password = $_POST['newpwd'];
  $passwordRepeat = $_POST['confirm-newpwd'];

  if(empty($password) || empty($passwordRepeat)){
    header("Location: ../create-newpwd.php?newpwd=empty");
    exit();
  } elseif ($password != $passwordRepeat) {
    header("Location: ../create-newpwd.php?newpwd=pwdnotsame");
    exit();
  }
  else {
    $userObj->userResetPwdInput($selector, $validator, $password);
  }

}
else {
  header("Location: ../passwordmanager.php");
}
