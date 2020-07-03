<?php

use PHPUnit\Framework\TestCase;

class FuelQuoteTest extends TestCase
{
    public function testFuelQuoteGallonsInput()
    {
        $correctGallons = '40';
        $incorrectGallons = 'Forty';

        $this->assertMatchesRegularExpression("/^[0-9]*$/", $correctGallons);
        $this->assertMatchesRegularExpression("/^[0-9]*$/", $incorrectGallons); //Fail     

    }

    
}
