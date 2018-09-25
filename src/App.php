<?php

namespace tts;

use tts\TripSorter\Configuration;
use tts\TripSorter\BoardingCards;
use tts\TripSorter\TripCardsSorter;

/**
 * Initializes the TripSorter Application and provides the required dependencies
 * 
 */
class App{


	function init()
	{	

		try{	

			$boardingCards = new BoardingCards();
			$boardingCards->setBoardingCards(Configuration::BOARDING_CARDS);

			$tripCardsSorter = new TripCardsSorter($boardingCards);

			print_r($tripCardsSorter->createJourney());
			
		}
		catch(Exception $e)
		{
			print_r($e->getMessage());
		}
	}
}