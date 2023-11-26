<?php

$severname="localhost";
$username="root";
$dbpassword="";
$dbname="crud";
$conn=mysqli_connect($severname,$username,$dbpassword,$dbname);
if($conn){
    echo"database connected";
}
else{
    echo mysqli_error();

}

$name=$_POST["name"];
$phone=$_POST["number"];
$email=$_POST["email"];
$password=$_POST["password"];
$query="INSERT INTO data values('$name','$email','$phone','$password')";
$run=mysqli_query($conn,$query);
if($run){
    echo "data inserted";
}
?>