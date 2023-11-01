<?php

//initializing the numbers to be swapped. But can be taken from user as well
$number1 = 5;
$number2 = 10;

echo "Original numbers: ";
echo "Number 1: " . $number1 . "<br>";
echo "Number 2: " . $number2 . "<br>";

// Swap the numbers
$temp = $number1;
$number1 = $number2;
$number2 = $temp;

echo "After swapping: ";

//numbers are swapped
echo "Number 1: " . $number1 . "<br>";
echo "Number 2: " . $number2 . "<br>";
?>

