<?php

namespace tts\TripSorter;

/**
*	BoardingCards Class
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
	* return the boarding cards
	*	
	* @return array
	*/
	public function getBoardingCards()
	{
		return $this->boardingCards;
	}

	/**
	* set the boarding cards	
	*
	* @param array $boardingCards
	*/
	public function setBoardingCards($boardingCards = [])
	{
		$this->boardingCards = $boardingCards;
	}

}