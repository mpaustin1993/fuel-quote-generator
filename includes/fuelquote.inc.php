
<?php

include 'autoloader.inc.php';

if (isset($_POST['quote-input'])) {

  $quoteClientId = $_POST['clientid'];
  $quoteGallons = $_POST['gallons'];
  $quoteState = $_POST['state'];
  $quoteDate = $_POST['deliveryDate'];

  $fuelQuoteObj = new FuelQuoteControl();
  $fuelQuoteObj->fuelQuoteInputSubmission($quoteClientId, $quoteGallons, $quoteState, $quoteDate);
} else {
  header("Location: ../fuelquoteform.php");
  exit();
}
