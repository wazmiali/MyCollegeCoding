<?php
function sumArrayElements($arr) {
    $sum = 0;
    foreach ($arr as $value) {
        $sum += $value;
    }
    return $sum;
}
$array = array(2, 4, 6, 8, 10);

$result = sumArrayElements($array);
echo "Sum of array elements: " . $result;
?> 