<?php
namespace tts\TripSorter;

use tts\TripSorter\BoardingCards;
use tts\Sorting\ArraySorterInterface;

/*
*   The main trip cards sorting class
*   
*  @dependencies: BoardingCards
*/
class TripCardsSorter{

    /**
    *  BoardingCards object
    */
    private $boardingCards;

    /**
     * ArraySorterInterface object
     */
    private $arraySorter;


    /**
    * TripCardsSorter constructor
    *   
    * @param BoardingCards $boardingCards
    */
    public function __construct(BoardingCards $boardingCards, ArraySorterInterface $arraySorter)
    {
        $this->boardingCards = $boardingCards;
        $this->arraySorter   = $arraySorter;
    }

    /**
    *  Function will sort the boarding cards and return them as array   
    *
    * @return array
    */
    public function createJourney(): array
    {
        $boardingCards = $this->boardingCards->getBoardingCards();

        $sortedBoardingCards = $this->arraySorter($boardingCards);

        return $sortedBoardingCards;
    }       

    /**
    * Sort array
    *
    * @param array   $array
    * @return array
    */
    public function arraySorter(array $array = []): array
    {
        return $this->arraySorter->sort($array);
    }
}