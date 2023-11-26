<?php
class calculation{
    public $a, $b, $c;

    function sum(){
        $this -> c = $this -> a+ $this -> b;
        return $this -> c;
    }
    }
   $p = new calculation();
   $p -> a=90;
   $p -> b=20;
   echo $p -> sum();
    ?>
