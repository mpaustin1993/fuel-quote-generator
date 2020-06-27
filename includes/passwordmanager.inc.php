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
else {
  header("Location: ../passwordmanager.php");
}
