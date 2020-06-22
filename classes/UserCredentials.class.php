<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/vendor/autoload.php';

class UserCredentials extends Dbh
{

  protected function validateUserCreate($userEmail, $userName, $userPassword)
  {
    $sql = "SELECT userName FROM userCredentials WHERE userName=?"; // ? is a placeholder

    $stmt = $this->connect()->prepare($sql);
    if (!$stmt) {
      header("Location: ../signup.php?error=sqlError");
      exit();
    } else {
      $stmt->execute([$userName]);
      $resultCheck = $stmt->fetchColumn();

      if ($resultCheck == true) {
        header("Location: ../signup.php?error=userNameTaken&mail=" . $userEmail);
        exit();
      } else {
        $sql = "INSERT INTO userCredentials (userName, userEmail, userPassword) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        if (!$stmt) {
          header("Location: ../signup.php?error=sqlError");
          exit();
        } else {
          $hashedPwd = password_hash($userPassword, PASSWORD_DEFAULT);
          $stmt->execute([$userName, $userEmail, $hashedPwd]);
          header("Location: ../signup.php?signup=success");
          exit();
        }
        $this->connect()->null;
      }
    }
  } //End of validateUserCreate

  protected function userLogin($mailUser, $userPwd)
  {
    $sql = "SELECT * FROM userCredentials WHERE userName = ? OR userEmail = ?;";
    $stmt = $this->connect()->prepare($sql);
    if (!$stmt) {
      header("Location: ../index.php?error=sqlError");
      exit();
    } else {
      $stmt->execute([$mailUser, $mailUser]);

      if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $pwdCheck = password_verify($userPwd, $row['userPassword']);

        if ($pwdCheck == false) {
          header('Location: ../index.php?error=wrongpwd');
          exit();
        } elseif ($pwdCheck == true) {
          session_start();
          $_SESSION['userSessID'] = $row['userId'];
          $_SESSION['userSessName'] = $row['userName'];
          $_SESSION['userSessEmail'] = $row['userEmail'];

          header("Location: ../dashboard.php?login=success");
          exit();
        } else {
          header("Location: ../index.php?error=wrongpwd");
          exit();
        }
      } else {
        header("Location: ../index.php?error=nouser");
        exit();
      }
    }
  } //End of userLogin

  protected function userCredentialsData()
  {
    $sql = "SELECT * FROM userCredentials;";
    $stmt = $this->connect()->query($sql);
    $userCredentialsData = "";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $userCredentialsData .=
        "<tr>
        <td>" . $row['userId'] . "</td>"
        . "<td>" . $row['userEmail'] . "</td>        
      </tr>";
    }
    return $userCredentialsData;
  }
} // end of class
