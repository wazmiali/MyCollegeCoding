<?php
echo "Welcome to scope and local global var in php.";
echo "<br>";
function printvalue(){
    global $a, $b;
    $a = 100;
    $b = 1000;
    echo "The value of your variable is $a and b is $b";

}
//echo $a;
printvalue();
echo "<br>The value of your variable a is $a and b is $b";
echo "<br>";
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);
?>