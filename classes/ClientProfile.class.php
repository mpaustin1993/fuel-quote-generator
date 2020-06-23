<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/vendor/autoload.php';

class clientProfile extends Dbh
{

  protected function createNewClient($clientUserId, $clientName, $clientAddress1, $clientAddress2, $clientCity, $clientState, $clientZip)
  {
    $sql = "SELECT clientUserId FROM clientProfile WHERE clientUserId=?"; // ? is a placeholder

    $stmt = $this->connect()->prepare($sql);
    if (!$stmt) {
      header("Location: ../profilemanager.php?error=sqlError");
      exit();
    } else {
      $stmt->execute([$clientUserId]);
      $resultCheck = $stmt->fetchColumn();

      if ($resultCheck == true) {
        header("Location: ../profilemanager.php?error=clientAlreadyCreated=" . $clientName);
        exit();
      } else {
        $sql = "INSERT INTO clientProfile (clientUserId, clientName, clientAddress1, clientAddress2, clientCity, clientState, clientZip) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        if (!$stmt) {
          header("Location: ../profilemanager.php?error=sqlError");
          exit();
        } else {
          $stmt->execute([$clientUserId, $clientName, $clientAddress1, $clientAddress2, $clientCity, $clientState, $clientZip]);
          header("Location: ../profilemanager.php?signup=success");
          exit();
        }
        $this->connect()->null;
      }
    }
  } //End of validateUserCreate

  protected function clientProfileData()
  {
    $sql = "SELECT * FROM clientProfile;";
    $stmt = $this->connect()->query($sql);
    $clientProfileData = "";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $clientProfileData .=
        "<tr>
        <td>" . $row['userId'] . "</td>"
        . "<td>" . $row['userEmail'] . "</td>
      </tr>";
    }
    return $clientProfileData;
  }
} // end of class
