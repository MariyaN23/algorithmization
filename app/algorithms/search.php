<?php

class Search
{
    public function linearSearch($array, $value)
    {
        $i = 0;
        while ($i < count($array)) {
            if ($array[$i] === $value) {
                return "$value is in array at $i index";
            }
            $i++;
        }
        return "$value not found in array";
    }

    public function binarySearch($array, $value)
    {
        sort($array);
        $l = 0;
        $r = count($array) - 1;
        while ($l <= $r) {
            $m = (int)floor(($l + $r) / 2);

            if ($array[$m] == $value) {
                $index = $l + 1;
                return "$value is in sorted array at index $index";
            } elseif ($array[$m] < $value) {
                $l = $m + 1;
            } else {
                $r = $m - 1;
            }
        }
        return "$value not found in the array";
    }
}

