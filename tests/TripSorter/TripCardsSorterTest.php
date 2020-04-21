<?php

require "vendor/autoload.php";

use tts\TripSorter\TripCardsSorter;
use tts\TripSorter\BoardingCards;
use tts\Sorting\BubbleSort;

/**
*   TripCardsSorterTest Class
*
*/
class TripCardsSorterTest extends PHPUnit_Framework_TestCase{

    /**
    * Test if an empty array can be sorted. Exception should be thrown.
    *
    */
    public function testIfEmptyArrayCanBeSorted()
    {
        $this->setExpectedException(Exception::class, "The array cannot be empty");

        $boardingCards = new BoardingCards();
        $boardingCards->setBoardingCards([]);

        $trip = new TripCardsSorter($boardingCards, new BubbleSort);
        $trip->arraySorter();   
    }

    /**
    * Test if the sorting function works
    *   
    */
    public function testArraySortingWorksFine()
    {   
        $arrayToBeSorted = [
            [
                "departure"     => "Madrid",
                "arrival"       => "Barcelona",
            ],
            [
                "departure"     => "Stockholm",
                "arrival"       => "New York JFK",
            ],
            [
                "departure"     => "Gerona Airport",
                "arrival"       => "Stockholm",
            ],
            [
                "departure"     => "Barcelona",
                "arrival"       => "Gerona Airport",
            ]
        ];

        $arraySorted = [
            [
                "departure"     => "Madrid",
                "arrival"       => "Barcelona",
            ],
            [
                "departure"     => "Barcelona",
                "arrival"       => "Gerona Airport",
            ],
            [
                "departure"     => "Gerona Airport",
                "arrival"       => "Stockholm",
            ],
            [
                "departure"     => "Stockholm",
                "arrival"       => "New York JFK",
            ]
            
        ];
        $boardingCards = new BoardingCards();

        $trip = new TripCardsSorter($boardingCards, new BubbleSort);
        $sortedArray = $trip->arraySorter($arrayToBeSorted);    

        $this->assertSame($sortedArray, $arraySorted);
    }


}