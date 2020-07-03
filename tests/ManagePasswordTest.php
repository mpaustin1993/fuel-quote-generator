<?php

use PHPUnit\Framework\TestCase;

class ManagePasswordTest extends TestCase
{
    public function testPasswordMatchInput()
    {

        $password = 'passwordDemo123!';
        $noMatchConfirmPwd = 'Demo123';
        $matchConfirmPwd = 'passwordDemo123!';

        // $this->assertEquals($password, $noMatchConfirmPwd);
        $this->assertEquals($password, $matchConfirmPwd);
        $this->assertEquals($password, $noMatchConfirmPwd);
    }
}
