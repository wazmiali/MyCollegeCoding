 <?php
echo "Welcome to associative array<br>";
//$array = array('this','this','that','what');
// echo "<br>";    
// echo $array[0];
// echo $array[1];
// echo $array[2];

$favcol = array('shubam'=>'red','rohan'=>'green',
'harry'=>'brown', 8=>'this');

foreach($favcol as $key => $value){
    echo "<br>Favorite color of $key is $value";

}
 
 ?>
