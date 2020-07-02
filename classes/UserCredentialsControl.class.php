<?php

class UserCredentialsControl extends UserCredentials
{

  //Properties
  public function validateUserInput($userEmail, $userName, $userPassword, $confirmPassword)
  {
    if (empty($userEmail) || empty($userName) || empty($userPassword) || empty($confirmPassword)) {
      header("Location: ../signup.php?error=emptyfield&uid=" . $userName . "&mail=" . $userEmail);
      exit();
    } elseif (!filter_var($userEmail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
      header("Location: ../signup.php?error=invalidemailuid");
      exit();
    } elseif (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) { //This use to check if the email is valid
      header("Location: ../signup.php?error=invalidemail&uid=" . $userName);
      exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
      header("Location: ../signup.php?error=invaliduid&mail=" . $userEmail);
      exit();
    } elseif ($userPassword !== $confirmPassword) { //Check if the password and confirmation match
      header("Location: ../signup.php?error=passwordcheck&uid=" . $userName . "&mail=" . $userEmail);
      exit();
    } else {
      $this->validateUserCreate($userEmail, $userName, $userPassword);
    }
  } //End of validateUserInput

  public function userLoginInput($mailUser, $userPassword)
  {
    if (empty($mailUser) || empty($userPassword)) {
      header("Location: ../index.php?error=emptyfields");
      exit();
    } else {
      $this->userLogin($mailUser, $userPassword);
    }
  } //end of userLoginInput

  public function demoUserLoginInput($demoUsername){
    $this->demoUserLogin($demoUsername);
  }

  public function usersPwdUpdateInput($userId, $currentPwd, $newPwd){
    $this->usersPwdUpdate($userId, $currentPwd, $newPwd);
  }

  public function userResetPwdEmailInput($userEmail){
    if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) { //This use to check if the email is valid
      header("Location: ../forgotpassword.php?error=invalidemail");
      exit();
    }
    else {
      $this->userResetPwdEmail($userEmail);
    }

  }

  public function userResetPwdInput($selector, $validator, $password){
    $this->userResetPwd($selector, $validator, $password);
  }

}
