
<!DOCTYPE html>
<!-- 
   File Name: Assignment 3
   Date: 2/15/2021
-->
<html>
  <head>
   <title>A3</title>
  </head>
  <body>
      <h1>Assignment 3, Part 1</h1>
      
    <h2>Ascending Order</h2>
    <table border="1">

<?php
        
$x = 9;
foreach (range(0,100) as $number){
    $total = $number * $x;
        echo "<tr><td>" . $number . " * " . $x . " = " . $total . "</td></tr>";
}
        
?>
    </table>
      <br>
      <h2>Reversed Order</h2>
     <table border="1">   
<?php        
$numbers = range(0,100);
$numbers = array_reverse($numbers);
        
foreach ($numbers as $value) {
    $total = $value * $x;
        echo "<tr><td>" , $value , " * " , $x , " = " ,$total , "</td></tr>";
}
         
?>
         
</table>
</body>
</html>
