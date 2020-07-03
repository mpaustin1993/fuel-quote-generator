<?php

use PHPUnit\Framework\TestCase;

class ForgotPasswordTest extends TestCase
{

  public function testValidEmailInput()
  {
    $userCorrectEmail = 'testing@gmail.com';
    $userIncorrectEmail = 'testinggmail.com';

    $this->assertEquals($userCorrectEmail, filter_var($userCorrectEmail, FILTER_VALIDATE_EMAIL));
    $this->assertEquals($userIncorrectEmail, filter_var($userIncorrectEmail, FILTER_VALIDATE_EMAIL));
  }
}
