<?php
$student=array(array("Name"=>"Ankit","Roll no"=>"123"),
array("name"=>"Ram","Roll no"=>"1234"),
array("name"=>"Mohit","Roll no"=>"12345"),
array("name"=>"Ajay","Roll no"=>"123456"),
array("name"=>"Akash","Roll no"=>"1234567"));

 echo "<pre>";
print_r($student);
      
echo "<table border='5px';>";
echo "<tr>";
foreach($student[0] as $key=>$value){
    echo "<td>";
    echo "$key";
    echo "</td>";
}
foreach($student as $row){
   //print_r($row);
    echo "<tr>";
    foreach($row as $newvalue){
        echo"<td>";
        echo $newvalue; 
        echo"</td>";
    }
    echo "</tr>";
}
  echo "</tr>";

?>