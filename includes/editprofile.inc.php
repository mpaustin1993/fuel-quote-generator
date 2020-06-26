<?php

session_start();

include 'autoloader.inc.php';

if (isset($_POST['editprofile-submit'])) {

  $namePost = $_POST['name'];
  $address1Post = $_POST['address1'];
  $address2Post = $_POST['address2'];
  $cityPost = $_POST['city'];
  $statePost = $_POST['state'];
  $zipPost = $_POST['zip'];

  $profileObj = new ClientProfileControl();

  $profileObj->validateProfileInput($_SESSION['id'], $namePost, $address1Post, $address2Post, $cityPost, $statePost, $zipPost);
} else {
  header("Location: ../profilemanager.php");
}
