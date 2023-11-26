<?php
//connecting to the database 
$servername = "localhost";
$username = "root";
$password = "";
 // create a connection 
 $conn = mysqli_connect($servername, $username, $password);
 if(!$conn){
  die("Sorry we faild to connect: ". mysqli_connect_error());
 
 }
  else{
  
  echo "connection was successful <br>";
 }   

 //creat a database 
 $sql = "CREATE DATABASE dbwazmi3";
 $result= mysqli_query($conn, $sql);

 // check for the database connection success
 if($result){
    echo "The db was created  successfully!";

 }
 else{
    echo "The db not cerated cuccessfully because of this error" . mysqli_error($conn);


 }
echo "The result is";
echo $result;
echo "<br>";

?>