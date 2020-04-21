<?php

require "vendor/autoload.php";

use tts\TripSorter\BoardingCards;

/**
*   BoardingCardsTest Class
*
*/
class BoardingCardsTest extends PHPUnit_Framework_TestCase{

    /**
    * Testing if the boardingCards array is empty   
    *
    */
    public function testArrayIsEmpty()
    {
        $boardingCards = new BoardingCards();
        $array = $boardingCards->getBoardingCards();

        $this->assertEmpty($array);
    }

    /**
    * Testing if the boardingCards is not empty
    * 
    */
    public function testArrayIsNotEmpty()
    {
        $boardingCards = new BoardingCards();
        $boardingCards->setBoardingCards("a nice string");
        $array = $boardingCards->getBoardingCards();

        $this->assertNotEmpty($array);
    }

    /**
    * Testing if the boardingCards is an array
    * 
    */
    public function testIfIsArray()
    {
        $boardingCards = new BoardingCards();
        $boardingCards->setBoardingCards(["nice array"]);
        $array = $boardingCards->getBoardingCards();

        $this->assertInternalType('array', $array);
    }

    /**
    * Testing if the boardingCards array is the same
    * 
    */
    public function testArrayIsTheSame()
    {   
        $boardingCardsArray = [
            [
                "departure"     => "Madrid",
                "arrival"       => "Barcelona",
            ],
            [
                "departure"     => "Stockholm",
                "arrival"       => "New York JFK",
            ],
            [
                "departure"     => "Barcelona",
                "arrival"       => "Gerona Airport",
            ],
            [
                "departure"     => "Gerona Airport",
                "arrival"       => "Stockholm",
            ]
        ];
        $boardingCards = new BoardingCards();
        $boardingCards->setBoardingCards($boardingCardsArray);
        $array = $boardingCards->getBoardingCards();

        $this->assertSame($array, $boardingCardsArray);
    }
}