<?php
echo "wlcome to the stage where we are ready to get cennect to database<br>";
//ways to connect to a database 
//MYSQLi extension 
//PDO
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
    
    echo "connection was successful";
}   
?>