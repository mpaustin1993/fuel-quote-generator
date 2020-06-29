<?php

class FuelQuoteView extends FuelQuote {

  public function fuelQuoteDataShow(){
    $result = array();
    $result = $this->fuelQuoteData();
    return $result;
  }

}
