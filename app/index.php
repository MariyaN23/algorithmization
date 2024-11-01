<?php
require './algorithms/sorting.php';
require './algorithms/search.php';
require './algorithms/stack.php';

$unsortedArray = array(10, 7, 2, 1, 9, 6, 8, 5, 3, 4);

$sorting = new Sorting();
$sortedWithQuickSort = $sorting->quickSort($unsortedArray);
$sortedWithSelectionSort = $sorting->selectionSort($unsortedArray);
$sortedWithBubbleSort = $sorting->bubbleSort($unsortedArray);

echo "<h1>Sorting</h1>";
echo "<h2>Quick sort</h2>";
echo "Unsorted array: " . implode(', ', $unsortedArray) . "<br>";
echo "Sorted array: " . implode(', ', $sortedWithQuickSort) . "<br>";

echo "<h2>Selection sort</h2>";
echo "Unsorted array: " . implode(', ', $unsortedArray) . "<br>";
echo "Sorted array: " . implode(', ', $sortedWithSelectionSort) . "<br>";

echo "<h2>Bubble sort</h2>";
echo "Unsorted array: " . implode(', ', $unsortedArray) . "<br>";
echo "Sorted array: " . implode(', ', $sortedWithBubbleSort) . "<br>";

$search = new Search();
$arrayOfNumbers = array(55, 1, 4, 16, 5, 8, 19, 20, 75, 3);
$linearFound = $search->linearSearch($arrayOfNumbers, 5);
$linearNotFound = $search->linearSearch($arrayOfNumbers, 15);

$binaryFound = $search->binarySearch($arrayOfNumbers, 5);
$binaryNotFound = $search->binarySearch($arrayOfNumbers, 15);

echo "<h1>Search</h1>";
echo "<h2>Linear search</h2>";
echo "Array: " . implode(', ', $arrayOfNumbers) . "<br>";
echo "Number: " . $linearFound. "<br>";
echo "Number: " . $linearNotFound. "<br>";

echo "<h2>Binary search</h2>";
echo "Array: " . implode(', ', $arrayOfNumbers) . "<br>";
echo "Number: " . $binaryFound. "<br>";
echo "Number: " . $binaryNotFound. "<br>";

echo "<h1>Stack</h1>";
$str1 = "Привет Hello, world!";
echo "String: $str1" . " Reversed:" . reversedString($str1). "<br>";

$str2 = "";
echo "String: $str2" . " Reversed:" . reversedString($str2). "<br>";

$str3 = "Лёша на полке клопа нашёл";
echo "String: $str3" . " Reversed:" . reversedString($str3). "<br>";

echo "<h1>Deque</h1>";