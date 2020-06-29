<?php

class FuelQuoteControl extends FuelQuote
{

  public function fuelQuoteInputSubmission($quoteClientId, $quoteGallon, $quoteDeliverAdr, $quoteDeliverCity, $quoteState, $quoteZipcode, $quoteDeliverDate)
  {

    //If one of the field is empty, the error will return and entered input will be set
    if (empty($quoteGallon) || empty($quoteDeliverAdr) || empty($quoteDeliverCity) || empty($quoteState) || empty($quoteZipcode) || empty($quoteDeliverDate)) {
      header("Location: ../fuelquoteform.php?error=emptyfield&deliveryAdr=" . $quoteDeliverAdr . "&deliveryCity=" . $quoteDeliverCity . "&zipcode=" . $quoteZipcode);
      exit();
    } elseif (!preg_match("/^[a-zA-Z]*$/", $quoteDeliverCity)) {   //Regex for City using only letters
      header("Location: ../fuelquoteform.php?error=invalidzipcode");
      exit();
    } elseif (!preg_match("/^[0-9]{5,9}$/", $quoteZipcode)) {   //Regex for Zipcode using only digits
      header("Location: ../fuelquoteform.php?error=invalidzipcode");
      exit();
    } else {
      $this->fuelQuoteInput($quoteClientId, $quoteGallon, $quoteDeliverAdr, $quoteState, $quoteZipcode, $quoteDeliverDate);
    }
  }
}
