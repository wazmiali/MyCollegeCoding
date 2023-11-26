<?php

// $var1=1;
// $var2="wazmi";
// $var3=1.1;
// echo $var1."</br>";
// echo $var2."</br>";
// echo $var3."</br>"; 


function findMissingNumber($arr) {
    $n = count($arr) + 1; 
    $total = ($n * ($n + 1)) / 2; 

    $sum = array_sum($arr);

    $missingNumber = $total - $sum;

    return $missingNumber;
}

$arr = [1, 2, 3, 5, 6, 7, 8];
$missingNumber = findMissingNumber($arr);
echo "The missing number is: $missingNumber";


?>