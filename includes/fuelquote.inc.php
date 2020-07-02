
<?php

include 'autoloader.inc.php';

if (isset($_POST['quote-input'])) {

  $quoteClientId = $_POST['clientid'];
  $quoteGallons = $_POST['gallons'];
  $quoteState = $_POST['state'];
  $quoteDeliveryDate = $_POST['deliveryDate'];

  $fuelQuoteObj = new FuelQuoteControl();
  $fuelQuoteObj->fuelQuoteInputSubmission($quoteClientId, $quoteGallons, $quoteState, $quoteDeliveryDate);
} else {
  header("Location: ../fuelquoteform.php");
  exit();
}
