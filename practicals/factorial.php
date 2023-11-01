<?php

//function call to perform factorial
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$number =6; // Replace this with the number for which you want to calculate the factorial

//calling the function
$result = factorial($number);

//printing the result
echo "Factorial of $number is $result";
?>

