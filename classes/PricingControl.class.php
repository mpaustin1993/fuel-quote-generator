<?php

class PricingControl extends Pricing
{

  public function pricingInputSubmission($priceGallon, $priceState, $priceFirst)
  {

    //If one of the field is empty, the error will return and entered input will be set
    if (empty($priceGallon) || empty($priceState) || empty($priceFirst)) {
      header("Location: ../fuelquoteform.php?error=emptyfield");
      exit();
    } elseif (!preg_match("/^[A-Z]{2}$/", $priceState)) {
      header("Location: ../profilemanager.php?error=invalidstate");
      exit();
    } else {
      $this->pricingInput($priceGallon, $priceState, $priceFirst);
    }
  }
}
