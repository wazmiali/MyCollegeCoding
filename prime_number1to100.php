<?php

$prime = array();
    $is_prime_no =false;
    for($i=2; $i<=10; $i++){
        $is_prime_no =True;
        for($j=2;$j<($i/2);$j++){
            if($i%$j==0){
                $is_prime_no = false;
                break;
            }
        }
        if($is_prime_no){
            array_push($prime,$i);
        }
            if(count($prime)==100){
                break;

            }
            echo array_sum($prime);
            echo "<br>";

    }
?>