<?php
namespace tts\Sorting;

class BubbleSort implements ArraySorterInterface {

    /**
    * implements the bubblesort algoritm of sorting an array of elements by comparing every element and switch their position
    * 
    * @param array   $array
    * @param integer $index
    * @return array
    */
    public function sort(array $array, int $index = 0): array
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
                if (empty($array[$i]['departure']) ||
                    empty($array[$j]['arrival']))
                {
                    throw new \Exception('Invalid array format');
                }

                if($array[$i]['departure'] == $array[$j]['arrival'])
                {
                    $array = $this->switchArrayElements($array, $i, $j);

                    return $this->sort($array, $i);
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
    public function switchArrayElements(array $array, int $i, int $j): array
    {
        if(empty($array))
        {
            throw new \Exception('The array cannot be empty');
        }

        $temp      = $array[$i];
        $array[$i] = $array[$j];
        $array[$j] = $temp;

        return $array;
    }
}