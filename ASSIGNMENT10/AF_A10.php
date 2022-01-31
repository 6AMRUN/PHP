<?php        

    $submit = $_POST['Submit'];
    if ($submit) {
    
        $select = $_POST['year'];
        switch ($select) {                                                     
            case "Freshman":
                echo "<h1>Hello student. You have 3 more year to graduate.</h1>";
                break;
            case "Sophmore":                                             
                echo "<h1>Hello student. You have 2 more year to graduate.</h1>";
                break;
            case "Junior":                 
                echo "<h1>Hello student. You have 1 more year to graduate.</h1>";
                break;
            case "Senior":   
                echo "<h1>Congratulations, you graduate by the end of this year!</h1>";
                break;                                                         
            default:                                                              
                echo "<h1>
                      <span style=\"color:red;\">WARNING:</span><br/>     
                      Invalid input value specified.
                      </h1>";                      
                break;
        }        
    }
?>
