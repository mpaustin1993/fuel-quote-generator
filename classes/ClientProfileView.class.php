<?php

class ClientProfileView extends ClientProfile
{


  public function getClientData()
  {
    $result = array();
    $result = $this->clientProfileData();
    return $result;
  }
}
