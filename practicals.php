<?php
function generateFibonacci($n) {
    $fib = array();
    $fib[0] = 0;
    $fib[1] = 1;
    
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    
    return $fib;
}

$n = 10; // Change this value to generate a different number of Fibonacci numbers
$fibonacciSeries = generateFibonacci($n);

foreach ($fibonacciSeries as $number) {
    echo $number . " ";
}

?>

