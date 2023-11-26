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

?>