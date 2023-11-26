<?php
function findMaxMin($arr) {
    $max = $arr[0];
    $min = $arr[0];
    
    $length = count($arr);
    
    for ($i = 1; $i < $length; $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
        
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    
    return array('max' => $max, 'min' => $min);
}

$myArray = array(5, 2, 9, 1, 5, 6);
$result = findMaxMin($myArray);

echo "Maximum element: " . $result['max'] . "\n";
echo "Minimum element: " . $result['min'] . "\n";

?>
