<?php

use PHPUnit\Framework\TestCase;

class ProfileManagerInputTest extends TestCase
{
    public function testProfileManagerNameInput()
    {
      $correctClientName = 'Han Bui';
      $incorrectClientName = 'Han Bui !';
      $incorrectClientName1 = 'HanBui'; //Company Name

      $this->assertMatchesRegularExpression("/^([a-zA-Z]+([\ a-zA-Z.]+)*){1,50}$/", $correctClientName);
      $this->assertMatchesRegularExpression("/^([a-zA-Z]+([\ a-zA-Z.]+)*){1,50}$/", $incorrectClientName); //Fail

      // //Regex where the clientName are continuous without space (e.g. misisng firstname or lastname)
      $this->assertMatchesRegularExpression("/^([a-zA-Z]+([\ a-zA-Z.]+)*){1,50}$/", $incorrectClientName1); //Fail

    } //End testProfileManagerNameInput

    public function testProfileManagerAddress1Input()
    {
      $correctAddress = '6600 Otherside Blvd';
      $incorrectAddress = 'OtherSide Blvd'; //Mising street number

      $this->assertMatchesRegularExpression("/^([0-9]+([\ a-zA-Z.]+)*){1,100}$/", $correctAddress);
      $this->assertMatchesRegularExpression("/^([0-9]+([\ a-zA-Z.]+)*){1,100}$/", $incorrectAddress); //Fail

    } //End testProfileManagerAddress1Input

    public function testProfileManagerAddress2Input()
    {
      $correctAddress = '100';
      $incorrectAddress = 'Unit 100';
      $incorrectAddress2 = '200!';

      $this->assertMatchesRegularExpression("/^([0-9]+([\ a-zA-Z.]+)*){1,100}$/", $correctAddress);
      $this->assertMatchesRegularExpression("/^([0-9]+([\ a-zA-Z.]+)*){1,100}$/", $incorrectAddress); //Fail
      $this->assertMatchesRegularExpression("/^([0-9]+([\ a-zA-Z.]+)*){1,100}$/", $incorrectAddress2);//Fail

    } //End testProfileManagerAddress2Input

    public function testProfileManagerCityInput ()
    {
        $correctCity = 'Houston';
        $correctCity1 = 'San Antonio';
        $incorrectCity = 'Houston1'; //Having number in city

        $this->assertMatchesRegularExpression("/^([a-zA-Z]+([\ a-zA-Z.]+)*){1,100}$/", $correctCity);
        $this->assertMatchesRegularExpression("/^([a-zA-Z]+([\ a-zA-Z.]+)*){1,100}$/", $correctCity1);
        $this->assertMatchesRegularExpression("/^([a-zA-Z]+([\ a-zA-Z.]+)*){1,100}$/", $incorrectCity); //Fail

    }

    public function testProfileManagerStateInput()
    {
        $correctState = 'TX';
        $incorrectState = 'Texas';

        $this->assertMatchesRegularExpression("/^[A-Z]{2}$/", $correctState);
        $this->assertMatchesRegularExpression("/^[A-Z]{2}$/", $incorrectState); //Fail

    }

    public function testProfileManagerZipcodeInput ()
    {
      $correctZip = '77055';
      $incorrectZip = '12345678910'; //Too long
      $incorrectZip1 = '123d1'; //Included letter

      $this->assertMatchesRegularExpression("/^[0-9]{5,9}$/", $correctZip);
      $this->assertMatchesRegularExpression("/^[0-9]{5,9}$/", $incorrectZip); //Fail
      $this->assertMatchesRegularExpression("/^[0-9]{5,9}$/", $incorrectZip1); //Fail

    }


}
