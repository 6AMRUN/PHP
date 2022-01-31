<!DOCTYPE html>
<!-- 
   File Name: Assignment 3 Part 3
   Date: 2/15/2021
-->
<html>

<head>
    <title>A3</title>
</head>

<body>
    <h1>Assignment 3, Part 3</h1>

    <?php
echo "<h2>Ascending Order based on Value</h2>";
$city = array("Chicago"=>"2,679,044", "Dallas"=>"1,379,735", "Houston"=>"2,359,480", "Los Angeles"=>"4,057,841", "New York City"=>"8,601,186", "Philadelphia"=>"1,576,596", "Phoenix"=>"1,711,356","San Antonio"=>"1,565,929", "San Diego"=>"1,453,775", "San Jose"=>"1,033,519");
asort($city); // ASC Value
      
while ($element = each($city)) {
    echo $element['key']. " - " . $element['value'];
    echo "<br /><br />";
}
      
echo "<h2>Ascending Order based on Key</h2>";      
$city = array("Chicago"=>"2,679,044", "Dallas"=>"1,379,735", "Houston"=>"2,359,480", "Los Angeles"=>"4,057,841", "New York City"=>"8,601,186", "Philadelphia"=>"1,576,596", "Phoenix"=>"1,711,356","San Antonio"=>"1,565,929", "San Diego"=>"1,453,775", "San Jose"=>"1,033,519");
ksort($city); // ASC Key
      
while ($element = each($city)) {
    echo $element['key']. " - " . $element['value'];
    echo "<br /><br />";
}
      
echo "<h2>Desending Order based on Value</h2>";      
$city = array("Chicago"=>"2,679,044", "Dallas"=>"1,379,735", "Houston"=>"2,359,480", "Los Angeles"=>"4,057,841", "New York City"=>"8,601,186", "Philadelphia"=>"1,576,596", "Phoenix"=>"1,711,356","San Antonio"=>"1,565,929", "San Diego"=>"1,453,775", "San Jose"=>"1,033,519");      
arsort($city); // DESC Value
      
while ($element = each($city)) {
    echo $element['key']. " - " . $element['value'];
    echo "<br /><br />";
}

echo "<h2>Desending Order based on Key</h2>";
$city = array("Chicago"=>"2,679,044", "Dallas"=>"1,379,735", "Houston"=>"2,359,480", "Los Angeles"=>"4,057,841", "New York City"=>"8,601,186", "Philadelphia"=>"1,576,596", "Phoenix"=>"1,711,356","San Antonio"=>"1,565,929", "San Diego"=>"1,453,775", "San Jose"=>"1,033,519");        
krsort($city); // DESC Key
      
while ($element = each($city)) {
    echo $element['key']. " - " . $element['value'];
    echo "<br /><br />";
}    
?>

</body>

</html>
