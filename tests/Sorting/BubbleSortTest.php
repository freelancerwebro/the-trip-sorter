<?php

require "vendor/autoload.php";

use tts\TripSorter\TripCardsSorter;
use tts\TripSorter\BoardingCards;
use tts\Sorting\BubbleSort;

class BubbleSortTest extends PHPUnit_Framework_TestCase {

    private $sorter;

    protected function setUp()
    {
        $this->sorter = new BubbleSort();
    }

    protected function tearDown()
    {
        $this->sorter = null;
    }

    public function testSwitchElementsIsCorrect()
    {   
        $array = [1, 5, 10, 2, 3];
        
        $switchedElements = $this->sorter->switchArrayElements($array, 1, 3);

        $this->assertSame($switchedElements, [1, 2, 10, 5, 3]);
    }

    public function testSortingEmptyArray()
    {
        $this->setExpectedException(Exception::class, "The array cannot be empty");

        $this->sorter->sort([]);
    }

    public function testInvalidArrayFormat()
    {
        $this->setExpectedException(Exception::class, "Invalid array format");

        $this->sorter->sort([1, 2, 10, "test", true]);
    }
}
