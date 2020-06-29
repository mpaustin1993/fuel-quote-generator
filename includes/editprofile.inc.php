<?php

session_start();

include 'autoloader.inc.php';

if (isset($_POST['editprofile-submit'])) {

  $name = $_POST['name'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];

  $profileObj = new ClientProfileControl();
  $profileObj->updateProfileInput($_SESSION['id'], $name, $address1, $address2, $city, $state, $zip);
} else {
  header("Location: ../profilemanager.php");
}
