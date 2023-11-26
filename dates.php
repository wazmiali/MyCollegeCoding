<?php

$d = date("dS F Y g:i a");
echo "Today date is $d <br>";

echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
$year = date("Y");
echo "<br>";
echo "copyright $year | All right reserved <br>";
?>