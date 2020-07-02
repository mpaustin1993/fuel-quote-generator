<?php

use PHPUnit\Framework\TestCase;

class LoginInputTest extends TestCase {

  public function testLoginUserInputEmpty ()
  {
    $this->assertTrue(empty($username));
    $this->assertTrue(empty($password));
  }

}
