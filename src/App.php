<?php

namespace TripSorter;

use TripSorter\TripSorter\Configuration;
use TripSorter\TripSorter\BoardingCards;
use TripSorter\TripSorter\TripCardsSorter;

/**
 * Initializes the TripSorter Application and provides the required dependencies
 * 
 */
class App{


	function init()
	{	

		try{

			//$tripSorter = new TripSorter();
		}
		catch(Exception $e)
		{
			print_r($e->getMessage());
		}
	}
}