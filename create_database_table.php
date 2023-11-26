<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbwazmi2";
 // create a connection 
 $conn = mysqli_connect($servername,$username,$password,$database);
 if(!$conn){
  die("Sorry we faild to connect:".mysqli_connect_error());
 
 }
  else{
  
  echo "connection was successful<br>";
 }   

 // cretae a table in database
 $sql="CREATE TABLE 'phptrip` (`Sno` INT(6) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(12) NOT
 NULL , `Dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`Sno`))"; 

$result= mysqli_query($conn, $sql);

 //check for the table creations database connection success
 if($result){
    echo "The table was created  successfully!<br>";

 }
 else{
    echo "The table not cerated cuccessfully because of this error" . mysqli_error($conn);
 }
?>