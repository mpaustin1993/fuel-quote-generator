<?php

class FuelQuoteControl extends FuelQuote
{

  public function fuelQuoteInputSubmission($quoteClientId, $quoteGallon, $quoteAddress, $quoteCity, $quoteState, $quoteZip, $quoteDeliveryDate)
  {

    //If one of the field is empty, the error will return and entered input will be set
    if (empty($quoteGallon) || empty($quoteAddress) || empty($quoteCity) || empty($quoteState) || empty($quoteZip) || empty($quoteDeliveryDate)) {
      header("Location: ../fuelquoteform.php?error=emptyfield&deliveryAdr=" . $quoteAddress . "&deliveryCity=" . $quoteCity . "&Zip=" . $quoteZip);
      exit();
    } elseif (!preg_match("/^[a-zA-Z]*$/", $quoteCity)) {   //Regex for City using only letters
      header("Location: ../fuelquoteform.php?error=invalidZip");
      exit();
    } elseif (!preg_match("/^[0-9]{5,9}$/", $quoteZip)) {   //Regex for Zip using only digits
      header("Location: ../fuelquoteform.php?error=invalidZip");
      exit();
    } else {
      $this->fuelQuoteInput($quoteClientId, $quoteGallon, $quoteAddress, $quoteCity, $quoteState, $quoteZip, $quoteDeliveryDate);
    }
  }
}
