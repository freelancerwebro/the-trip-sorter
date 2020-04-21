<?php
namespace tts;

use tts\TripSorter\Configuration;
use tts\TripSorter\BoardingCards;
use tts\TripSorter\TripCardsSorter;
use tts\Helper\ArrayFormatter;
use tts\Sorting\BubbleSort;

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

            $tripCardsSorter = new TripCardsSorter($boardingCards, new BubbleSort());
            $journey = $tripCardsSorter->createJourney();

            ArrayFormatter::display($journey);
        }
        catch(Exception $e)
        {
            ArrayFormatter::display($e->getMessage());
        }
    }
}