<?php

namespace TripSorter;


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