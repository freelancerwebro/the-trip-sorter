<?php

require "vendor/autoload.php";

use tts\TripSorter\TripCardsSorter;
use tts\TripSorter\BoardingCards;
use tts\Sorting\BubbleSort;

class BubbleSortTest extends PHPUnit_Framework_TestCase {

    /**
    * Test if the switchElements function works fine 
    *
    */
    public function testSwitchElementsIsCorrect()
    {   
        $array = [1, 5, 10, 2, 3];
        
        $sort = new BubbleSort();
        $switchedElements = $sort->switchArrayElements($array, 1, 3);

        $this->assertSame($switchedElements, [1, 2, 10, 5, 3]);
    }
}
