<?php

class UserCredentialsView extends UserCredentials
{

  public function userDataShow()
  {
    $result = $this->userCredentialsData();
    echo $result;
  }
}
