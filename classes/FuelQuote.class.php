<?php

session_start();

class FuelQuote extends Dbh
{

  protected function fuelQuoteInput($quoteClientId, $quoteGallon, $quoteAddress, $quoteCity, $quoteState, $quoteZip, $quoteDeliveryDate)
  {
  }

  protected function fuelQuoteData()
  { //Extracting data from the DB , including quoteHistory and currentQuote
  }
}
