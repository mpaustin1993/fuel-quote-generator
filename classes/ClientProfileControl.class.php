<?php

class ClientProfileControl extends ClientProfile
{

  //Properties
  public function validateProfileInput($clientUserId, $clientName, $clientAddress1, $clientAddress2, $clientCity, $clientState, $clientZip)
  {

    $this->createNewClient($clientUserId, $clientName, $clientAddress1, $clientAddress2, $clientCity, $clientState, $clientZip);
  } //End of validateUserInput




}
