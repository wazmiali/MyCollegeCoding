<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>  
<body>
    <form method="POST" action="">
        Enter number:<input type="number" name="number">

        <input type="submit" name="submit" value="submit">
</form>
<table  align = "left" border = "1" cellpadding = "3" cellspacing = "0">
   
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $num=$_POST["number"];
    $mul=1; 
    for($i=1; $i<=10; $i++){
       
       
        
        echo "<tr>";
        for($j=1;$j<=10;$j++){            
            echo  "<td>";
            echo $mul=$i*$j;
            echo "</td>"; 
           
    
        }
       echo" </tr>";
    }
}
?>