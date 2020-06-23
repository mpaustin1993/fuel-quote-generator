
<?php

include 'autoloader.inc.php';

if (isset($_POST['quote-input'])) {

  $quoteClientId = $_POST['clientid'];
  $quoteGallon = $_POST['gallons'];
  $quoteDeliverAdr = $_POST['deliveryAdr'];
  $quoteDeliverCity = $_POST['deliveryCity'];
  $quoteState = $_POST['state'];
  $quoteZipcode = $_POST['zipcode'];
  $quoteDeliverDate = $_POST['deliveryDate'];

  $fuelQuoteObj = new FuelQuoteControl();
  $fuelQuoteObj->fuelQuoteInputSubmission($quoteClientId, $quoteGallon, $quoteDeliverAdr, $quoteDeliverCity, $quoteState, $quoteZipcode, $quoteDeliverDate);

}
else {
  header("Location: ../fuelquoteform.php");
  exit();
}
