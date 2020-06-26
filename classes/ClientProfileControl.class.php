<?php

class ClientProfileControl extends ClientProfile
{

  //Properties
  public function updateProfileInput($clientUserId, $clientName, $clientAddress1, $clientAddress2, $clientCity, $clientState, $clientZip)
  {
    $this->updateProfile($clientUserId, $clientName, $clientAddress1, $clientAddress2, $clientCity, $clientState, $clientZip);
  } //End of validateUserInput


}
