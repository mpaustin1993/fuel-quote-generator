<?php

class ClientProfileView extends ClientProfile
{

<<<<<<< HEAD
  public function clientDataShow()
=======
  public function getClientData()
>>>>>>> e25ac94f4bb269b3bff78104426af642da632e6a
  {
    $result = array();
    $result = $this->clientProfileData();
    return $result;
  }
}
