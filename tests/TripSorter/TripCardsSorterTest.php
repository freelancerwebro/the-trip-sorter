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
	* Test if the switchElements function works fine with a good array
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


}