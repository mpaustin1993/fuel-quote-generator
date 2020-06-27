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

          $_SESSION['id'] = $row['userId'];
          $_SESSION['username'] = $row['userName'];
          $_SESSION['email'] = $row['userEmail'];

          header("Location: ../profilemanager.php?login=success");
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

  protected function demoUserLogin($demoUsername){
    $sql = "SELECT * FROM userCredentials WHERE userName = ?;";

    $stmt = $this->connect()->prepare($sql);
    if (!$stmt) {
      header("Location: ../index.php?error=sqlError");
      exit();
    }
    else {
      $stmt->execute([$demoUsername]);
      if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        session_start();
        $_SESSION['id'] = $row['userId'];
        $_SESSION['username'] = $row['userName'];
        $_SESSION['email'] = $row['userEmail'];

        header("Location: ../fuelquoteform.php?login=demo");
        exit();
      }
      else {
        header("Location: ../index.php?error=nouser");
        exit();
      }
    }
  } //End of demoUserLogin


  protected function usersPwdUpdate($userId, $currentPwd,$newPwd) {

    $sql = "SELECT * FROM userCredentials WHERE userId = ?;";
    $stmt = $this->connect()->prepare($sql);

    if (!$stmt) {
      header("Location: ../passwordmanager.php?error=sqlerror");
      exit();
    }
    else {
      $stmt->execute([$userId]);
      if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $pwdCheck = password_verify($currentPwd, $row['userPassword']);

        if ($pwdCheck == false) {
          header("Location: ../passwordmanager.php?error=notcurrentpwd");
          exit();
        }
        elseif ($pwdCheck == true) {
          $hashedNewPwd = password_hash($newPwd, PASSWORD_DEFAULT);

          $sql = "UPDATE userCredentials SET userPassword = ?;";
          $stmt = $this->connect()->prepare($sql);
          if (!$stmt) {
            header("Location: ../passwordmanager.php?error=sqlerror");
            exit();
          }
          else {
            $stmt->execute([$hashedNewPwd]);
            header("Location: ../passwordmanager.php?newpwdset=success");
          }
        }
        else {
          header("Location: ../passwordmanager.php?error=nouser");
        }
      }
    }

  }//End of usersPwdUpdate

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
  }//End of userCredentialsData



} // end of class
