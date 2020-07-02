<?php

use PHPUnit\Framework\TestCase;

class SignupInputTest extends TestCase {

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
    $correctUsername = 'viponline';
    $incorrectUsername = 'viponline@!';

    $this->assertMatchesRegularExpression("/^[a-zA-Z0-9]*$/", $correctUsername);
    $this->assertMatchesRegularExpression("/^[a-zA-Z0-9]*$/", $incorrectUsername);

  }

  public function testPasswordMatchInput(){

    $password = 'pwddemo123456!';
    $noMatchConfirmPwd = '123456';
    $matchConfirmPwd = 'pwddemo123456!';

    // $this->assertEquals($password, $noMatchConfirmPwd);
    $this->assertEquals($password, $matchConfirmPwd);
    $this->assertEquals($password, $noMatchConfirmPwd);

  }

}
