<?php

class ClientProfileView extends ClientProfile
{

  public function userDataShow()
  {
    $result = $this->clientProfileData();
    echo $result;
  }
}
