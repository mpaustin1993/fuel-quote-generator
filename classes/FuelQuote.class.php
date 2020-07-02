<?php

session_start();

class FuelQuote extends Dbh
{

  protected function fuelQuoteInput($quoteClientId, $quoteGallons, $quoteDate)
  {

    $sql = "INSERT INTO fuelQuote (quoteClientId, quoteGallons, quoteDate) VALUES (?, ?, ?);";
    $stmt = $this->connect()->prepare($sql);
    if (!$stmt) {
      header("Location: ../fuelquoteform.php?error=sqlerror");
      exit();
    } else {
      $stmt->execute([$quoteClientId, $quoteGallons, $quoteDate]);
      header("Location: ../fuelquote.php?&editprofile=success&cid=" . $quoteClientId . "&gallon=" . $quoteGallons . "&quoteDeliveryDate=" . $quoteDate);
      exit();
    }
    $this->connect()->null;
  }



  protected function fuelQuoteData()
  { //Extracting data from the DB , including quoteHistory and currentQuote
    
  }
}
