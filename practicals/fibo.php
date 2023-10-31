<?php
function generateFibonacci($n) {
    $fibonacciSequence = array();
    
    $a = 0;
    $b = 1;
    
    for ($i = 0; $i < $n; $i++) {
        $fibonacciSequence[] = $a;
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }
    
    return $fibonacciSequence;
}

$terms = 10; // Change this to the number of terms you want
$fibonacciSeries = generateFibonacci($terms);

echo "Fibonacci Sequence for the first $terms terms: ";
echo implode(', ', $fibonacciSeries);
?>

