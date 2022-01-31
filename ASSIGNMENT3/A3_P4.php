
<!DOCTYPE html>
<!-- 
   Student Name: Alexies Farinas
   File Name: Assignment 3 Part 4
   Date: 2/15/2021
-->
<html>
  <head>
   <title>A4</title>
  </head>
  <body>
      <h1>Assignment 3, Part 4</h1>

<?php
      
$city = array(array('City' => 'New York',
                    'Avg High Temp' => '62',
                    'Avg Low Temp' => '48',
                ),
              array ('City' => 'Los Angeles'
                     , 'Avg High Temp' => '75'
                     , 'Avg Low Temp' => '56'
                ), 
              array('City' => 'Chicago' 
                     , 'Avg High Temp' => '59'
                     , 'Avg Low Temp' => '41'
                ), 
              array('City' => 'Houston' 
                    , 'Avg High Temp' => '80'
                    , 'Avg Low Temp' => '60'
                ), 
              array('City'=>'Phoenix',
                    'Avg High Temp'=>'87',
                   'Avg Low Temp'=>'63'
                   ), 
              array('City' => 'Philadelphia',
                    'Avg High Temp' => '65',
                   'Avg Low Temp' => '47'
                   ), 
              array('City' => 'San Antonio',
                    'Avg High Temp' => '80',
                   'Avg Low Temp' => '59'
                   ), 
              array('City' => 'San Diego',
                    'Avg High Temp' => '70',
                   'Avg Low Temp' => '58'
                   ),                
              array('City' => 'Dallas',
                    'Avg High Temp' => '77',
                   'Avg Low Temp' => '57'
                   ),                
              array('City' => 'San Jose',
                    'Avg High Temp' => '71',
                   'Avg Low Temp' => '50'
                   )         
             );
      sort($city);
      for ($row =0; $row < 10; $row++){
          echo ' | ' . $city[$row]['City'] . ' | ' .$city[$row]['Avg High Temp']. ' | ' .$city[$row]['Avg Low Temp']. ' | <br /> ';
      }
?>
      
</body>
</html>
