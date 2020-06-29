<?php

class ClientProfileView extends ClientProfile
{

  public function clientDataShow()
  {
    $result = $this->clientProfileData();
    echo $result;
  }
}
