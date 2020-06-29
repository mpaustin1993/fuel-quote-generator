<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/vendor/autoload.php';

class clientProfile extends Dbh
{

  protected function updateProfile($clientUserId, $clientName, $clientAddress1, $clientAddress2, $clientCity, $clientState, $clientZip)
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
        $sql = "UPDATE clientProfile SET clientName = ?, clientAddress1 = ?, clientAddress2 = ?, clientCity = ?, clientState = ?, clientZip = ? WHERE clientUserId = ?";
        $stmt = $this->connect()->prepare($sql);
        if (!$stmt) {
          header("Location: ../profilemanager.php?clientUserId=" . $clientUserId . "&error=sqlerror");
          exit();
        } else {
          $stmt->execute($clientName, $clientAddress1, $clientAddress2, $clientCity, $clientState, $clientZip, $clientUserId);
          header("Location: ../profilemanager.php?tid=" . $clientUserId . "&editprofile=success");
          exit();
        }
      } else {

        $sql = "INSERT INTO clientProfile (clientUserId, clientName, clientAddress1, clientAddress2, clientCity, clientState, clientZip) VALUES (?, ?, ?, ?, ?, ?, ?);";
        $stmt = $this->connect()->prepare($sql);
        if (!$stmt) {
          header("Location: ../profilemanager.php?error=sqlerror");
          exit();
        } else {
          $stmt->execute([$clientUserId, $clientName, $clientAddress1, $clientAddress2, $clientCity, $clientState, $clientZip]);
          header("Location: ../profilemanager.php?&editprofile=success");
          exit();
        }
        $this->connect()->null;
      }
    }
  }

  protected function clientProfileData()
  {
    $sql = "SELECT * FROM clientProfile;";
    $stmt = $this->connect()->query($sql);
    $clientProfileData = "";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $clientProfileData .=
        "<tr>
        <td>" . $row['clientUserId'] . "</td>"
        . "<td>" . $row['clientName'] . "</td>"
        . "<td>" . $row['clientAddress1'] . "</td>"
        . "<td>" . $row['clientAddress2'] . "</td>"
        . "<td>" . $row['clientCity'] . "</td>"
        . "<td>" . $row['clientState'] . "</td>"
        . "<td>" . $row['clientZip'] . "</td>
      </tr>";
    }
    return $clientProfileData;
  }
} // end of class
