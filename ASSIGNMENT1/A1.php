<!DOCTYPE html>
<!-- 
A1.php
1/29/21
-->
<html>
<body>
    <h1>Chapter 1 - Assignment 1</h1>
    
<?php
    echo "It is ";
    echo date('H:i, jS F Y');
    echo "</p>";
?>
<?php
    
    $num = $_POST["number"];
    $x = 1;
    
    if (empty($num)) {
        echo "No number was entered";
        exit;    
    }
    
    if (is_numeric($num)){
        echo "$num is numeric </br></br>";
        echo "the multiplications table for $num is: </br></br>";
    }
    
?>    

    <table border="1">
<?php

    for($countNum=1; $countNum <=10; $countNum += 1){
            
        echo "<tr><td>$num * $x = " .$num * $x. "</td></tr>";
        $x ++;
    }
?>
    </table>
    
</body>
</html>
