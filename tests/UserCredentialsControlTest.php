<?php

use PHPUnit\Framework\TestCase;

class UserCredentialsControlTest extends TestCase {


  public function testValidateUserInputEmpty ()
  {

    $this->assertTrue(empty($email));
    $this->assertTrue(empty($username));
    $this->assertTrue(empty($password));
    $this->assertTrue(empty($confirmPwd));

  }

  public function testValidEmailInput()
  {

    $userIncorrectEmail = 'testinggmail.com';
    $userCorrectEmail = 'testing@gmail.com';

    $this->assertEquals($userCorrectEmail, filter_var($userCorrectEmail, FILTER_VALIDATE_EMAIL));
    $this->assertEquals($userIncorrectEmail, filter_var($userIncorrectEmail, FILTER_VALIDATE_EMAIL));

  }

  public function testValidateUsername()
  {
    $username = 'viponline';

    $this->assertEquals($username, preg_match($username, "/^[a-zA-Z0-9]*$/"));

  }

  public function testPasswordMatchInput(){

    $password = '123456';
    $confirmPwd = '123456';

    // $this->assertTrue(False);

    $this->assertEquals($password, $confirmPwd);
  }

}
