<?php

// Given arrays
$arr1 = [63, 42, 14, 7, 8];
$arr2 = [12, 38, 6, 4];

// Check if arrays have the same length
if (count($arr1) !== count($arr2)) {
    echo "arr1 must have equal value to arr2";
}

$sum = [];

// Iterate through each element of the arrays and add them
$count = count($arr1);
for ($i = 0; $i < $count; $i++) {
    $sum[] = $arr1[$i] + $arr2[$i];
}


echo "Sum of the arrays: " . json_encode($sum);
?>
