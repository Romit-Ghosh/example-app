<?php
function generateFibonacci($n) {
    $fibonacciSequence = array();

    //initializing variables
    $a = 0;
    $b = 1;

    //for loop to print fibonacci series
    for ($i = 0; $i < $n; $i++) {
        $fibonacciSequence[] = $a;
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }

    // returning the sequence
    return $fibonacciSequence;
}

$terms = 10; // Change this to the number of terms you want
$fibonacciSeries = generateFibonacci($terms);

echo "Fibonacci Sequence for the first $terms terms: ";
echo implode(', ', $fibonacciSeries);
?>


