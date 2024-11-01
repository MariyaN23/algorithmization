<?php
class Sorting
{
    public function quickSort($array)
    {
        $length = count($array);
        if ($length <= 1) {
            return $array;
        }
        $pivot = $array[0];
        $left = $right = array();

        for ($i = 1; $i < $length; $i++) {
            if ($array[$i] < $pivot) {
                $left[] = $array[$i];
            } else {
                $right[] = $array[$i];
            }
        }
        return array_merge(Sorting::quickSort($left), array($pivot), Sorting::quickSort($right));
    }

    public function selectionSort($array)
    {
        $length = count($array);
        for ($i = 0; $i < $length; $i++) {
            $low = $i;
            for ($j = $i + 1; $j < $length; $j++) {
                if ($array[$j] < $array[$low]) {
                    $low = $j;
                }
            }
            if ($array[$i] > $array[$low]) {
                $temp = $array[$low];
                $array[$low] = $array[$i];
                $array[$i] = $temp;
            }
        }
        return $array;
    }

    public function bubbleSort($array)
    {
        $length = count($array);
        for ($i = 0; $i < $length - 1; $i++) {
            for ($j = 0; $j < $length - $i - 1; $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                }
            }
        }
        return $array;
    }
}