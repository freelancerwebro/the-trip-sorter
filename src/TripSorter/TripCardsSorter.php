<?php
namespace tts\TripSorter;

use tts\TripSorter\BoardingCards;

ini_set('memory_limit', '-1');
/*
*	The main trip cards sorting class
*	
*  @dependencies: BoardingCards
*/
class TripCardsSorter{

	/**
	*  BoardingCards object
	*/
	private $boardingCards;


	/**
	* TripCardsSorter constructor
	*	
	* @param BoardingCards $boardingCards
	*/
	public function __construct(BoardingCards $boardingCards)
	{
		$this->boardingCards = $boardingCards;
	}


	/**
	*  Function will sort the boarding cards and return them as array	
	*
	* @return array
	*/
	public function createJourney()
	{
		$boardingCards = $this->boardingCards->getBoardingCards();

		$sortedBoardingCards = $this->arraySorter($boardingCards);

		return $sortedBoardingCards;
	}		

	/**
	* implements the bubblesort algoritm of sorting an array of elements by comparing every element and switch their position
	*
	* @param array   $array
	* @param integer $index
	* @return array
	*/
	public function arraySorter($array = [], $index = 0) 
	{
		if(empty($array))
		{
			throw new \Exception('The array cannot be empty');
		}

		$count = count($array);

		for($i = 0; $i < $count; $i++)
		{
			for($j = $i + 1; $j < $count; $j++)
			{
				if($array[$i]['departure'] == $array[$j]['arrival'])
				{
					$array = $this->switchArrayElements($array, $i, $j);

					return $this->arraySorter($array, $i);
				}
			}
		}

		return $array;
	}

	/*
	* switch two elements from an array by their position
	*
	* @param array   $array
	* @param integer $i
	* @param integer $j
	* @return array  $array
	*/
	public function switchArrayElements($array = [], $i, $j)
	{
		if(empty($array))
		{
			throw new \Exception('The array cannot be empty');
		}

		$temp 	   = $array[$i];
		$array[$i] = $array[$j];
		$array[$j] = $temp;

		return $array;
	}

}