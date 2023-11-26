<?php

echo "Multi dimensional array <br>";
$multiDim = array(
                    array(2, 5, 7, 8),
                    array(1, 2, 3, 1),
                    array(4, 5, 0, 1)

);
$array = array(
                array(1, 2, 3, 4),
                array(5, 6, 6, 7),
                array(1, 5, 7, 8)
);

// echo var_dump($multiDim);

// //echo $multiDim[1][2];

// for ($i=0; $i <count($multiDim); $i++) {
//     echo var_dump($multiDim[$i]);
//     echo "<br>";

//     # code...
// }
for ($i=0; $i <count($multiDim) ; $i++) { 
    for ($j=0; $j <count($multiDim[$i]) ; $j++) {
        echo $multiDim[$i][$j];
        echo " ";
}
echo "<br>";
}
echo "<br>";
echo "<br>";
for ($k=0; $k <count($array) ; $k++) { 
    for ($l=0; $l <count($array[$k]) ; $l++) {
        echo $array[$k][$l];
        echo " ";
}
echo "<br>";
}
?>