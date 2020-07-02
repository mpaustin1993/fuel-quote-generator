<?php

class FuelQuoteView extends FuelQuote
{

  public function fuelQuoteDataShow()
  {
    $result = $this->fuelQuoteData();
    return $result;
  }
}
