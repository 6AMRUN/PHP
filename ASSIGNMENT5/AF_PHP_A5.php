<?php

  require('AF_PHP_Header.php');

?>

<?php    

    $name = $_POST["name"];
    $num = $_POST["number"];
    $x = 1;
      
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    larger ($num1, $num2);

    echo "<section>";
    if (empty($num)) {
        echo "No number was entered";
        exit;    
    }
    
    if (is_numeric($num)){

        echo "Welcome " .$name. "<br /><br />";
    }
    
   echo "<table>";

    for($countNum=1; $countNum <=10; $countNum += 1){
            
        echo "<tr><td>$num * $x = " .$num * $x. "</td></tr>";
        $x ++;
    }             
        
     echo "</table><br \> ";

    function larger ($num1, $num2) {                                                       if (!isset($num1) || !isset($num2)) {                                                 return false;  
    }
    else if ($num1 >= $num2) {
        return $num1 - $num2;
        }
    else {                                                                      
        return $num2 - $num1;                                    
        }                                                                       
    }
    echo "The difference between the two numbers is " .larger($num1, $num2). "<br /><br \>";
    
    echo "</section>";

?>

<?php

  require('AF_PHP_Footer.php');

?>