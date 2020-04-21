<?php

namespace tts\TripSorter;

/**
*   BoardingCards Class
*
*/
class BoardingCards{

    /**
    * The boarding cards array
    *  
    * @var array
    */
    private $boardingCards = [];

    /**
     * set the boarding cards in constructor
     * @param array $boardingCards
     */
    public function __construct($boardingCards = [])
    {
        $this->boardingCards = $boardingCards;
    }

    /**
    * return the boarding cards
    *   
    * @return array
    */
    public function getBoardingCards()
    {
        return $this->boardingCards;
    }
}