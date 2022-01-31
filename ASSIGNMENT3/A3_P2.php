<!DOCTYPE html>
<!-- 
   File Name: Assignment 3 Part 2
   Date: 2/15/2021
-->
<html>

<head>
    <title>A3</title>
</head>

<body>
    <h1>Assignment 3, Part 2</h1>

    <?php
      
$temperatures = ("86, 61, 121, 115, 46, 76, 135, 60, 150");
$temp_array = explode(',', $temperatures);
$total = 0;
$numTemp = count($temp_array);
      
foreach($temp_array as $temp) {
    $total += $temp;
}
echo "List of precipitation in the last nine years of Las Vegas, in millimeters: ";
echo $temperatures;    
echo "<br /><br />";
      
$avgTemp = $total/$numTemp;
echo "Average Temperature is : " . $avgTemp; 
      
sort($temp_array); // Sort in ASC order
      
echo "<br />";
echo "Lowest precipitation recieved in Las vegas: ";
      
for ($i = 0; $i < 1; $i++) { 
    echo $temp_array[$i];
}
      
echo "<br />";
echo "Highest precipitation recieved in Las vegas: ";
      
for ($i = $numTemp-1; $i < $numTemp; $i++){
    echo $temp_array[$i];
}
?>

</body>

</html>
