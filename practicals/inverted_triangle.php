<?php
$rows = 5; // Change this to the number of rows you want

// Generating the pattern
for ($i = $rows; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}
?>

