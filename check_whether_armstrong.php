<?php
$num=2;
$total=0;
$x=$num;

while($x!=0){
    $rem=$x%10;
    $total=$total+$rem*$rem*$rem;
    $x=$x/10;
}
if($num==$total){
    echo"Yes it is Armstrong number";
}
else{
    echo"No it is not an Armstrong number";

}
?>