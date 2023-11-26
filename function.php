<?php
function processMarks($marksarr){
    $sum = 0;
    foreach ($marksarr as $value) {
        $sum += $value;
    }
    return $sum;
}
$rohan = [34, 98, 45, 12, 98, 93];
$sumMarks = processMarks($rohan);

$harry = [99, 98, 93, 94, 17, 100];
$sumMarksharry = processMarks($harry);
echo "Total marks second by Rohan out of 600 is $sumMarks<br>";
echo "Total marks second by Harry out of 600 is $sumMarksharry<br>";


?>