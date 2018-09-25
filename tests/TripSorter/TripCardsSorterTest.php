<?php

require "vendor/autoload.php";

use tts\TripSorter\TripCardsSorter;
use tts\TripSorter\BoardingCards;

/**
*	TripCardsSorterTest Class
*
*/
class TripCardsSorterTest extends PHPUnit_Framework_TestCase{

	/**
	* Test if the switchElements function works fine 
	*
	*/
	public function testSwitchElementsIsCorrect()
	{	
		$array = [1, 5, 10, 2, 3];

		$boardingCards = new BoardingCards();
		$boardingCards->setBoardingCards([]);

		$trip = new TripCardsSorter($boardingCards);
		$switchedElements = $trip->switchArrayElements($array, 1, 3);

		$this->assertSame($switchedElements, [1, 2, 10, 5, 3]);
	}

	/**
	* Test if an empty array can be sorted. Exception should be thrown.
	*
	*/
	public function testIfEmptyArrayCanBeSorted()
	{
		$this->setExpectedException(Exception::class, "The array cannot be empty");

		$boardingCards = new BoardingCards();
		$boardingCards->setBoardingCards([]);

		$trip = new TripCardsSorter($boardingCards);
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
				"departure"		=> "Madrid",
				"arrival"       => "Barcelona",
			],
			[
				"departure"		=> "Stockholm",
				"arrival"       => "New York JFK",
			],
			[
				"departure"		=> "Gerona Airport",
				"arrival"       => "Stockholm",
			],
			[
				"departure"		=> "Barcelona",
				"arrival"       => "Gerona Airport",
			]
		];

		$arraySorted = [
			[
				"departure"		=> "Madrid",
				"arrival"       => "Barcelona",
			],
			[
				"departure"		=> "Barcelona",
				"arrival"       => "Gerona Airport",
			],
			[
				"departure"		=> "Gerona Airport",
				"arrival"       => "Stockholm",
			],
			[
				"departure"		=> "Stockholm",
				"arrival"       => "New York JFK",
			]
			
		];
		$boardingCards = new BoardingCards();

		$trip = new TripCardsSorter($boardingCards);
		$sortedArray = $trip->arraySorter($arrayToBeSorted);	

		$this->assertSame($sortedArray, $arraySorted);
	}


}