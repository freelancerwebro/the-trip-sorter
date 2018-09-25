<?php

namespace tts\Helper;

/*
*	ArrayFormatter class 
*	
*/
class ArrayFormatter{

	/**
	*	Display the array in a readable format for web pages
	* 
	* @param array $array
	*/
	public static function display($array = [])
	{
		$string = "<pre>";
		$string .= print_r($array, true);
		$string .= "</pre>";

		return $string;
	}
}