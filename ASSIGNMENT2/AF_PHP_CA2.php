<?php
  // create short variable name
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
?>
<!DOCTYPE html>
<!-- 
   AF_PHP_CA2.php
   2/4/21
   -->
<html>
  <head>
    <title>A2</title>
  </head>
  <body>
    <header>
         <h1> Assigment 2</h1>
      </header>
<?php
      $outputstring = $address. "\n"; 
      
      @$file = fopen("AF_directory.txt", 'ab');
    
      fwrite($file, $outputstring);
      
      flock($file, LOCK_SH); // lock file for reading
      
      echo "<p> Thank you " .$name. " for your input.</p>";
?> 
      
<?php
      @$file = fopen("AF_directory.txt", 'rb');
      
      echo "The size of the text file is " . filesize("AF_directory.txt"). " Bytes <br /><br />";
      
      while (!feof($file)) {
         $address = fgets($file);
          echo htmlspecialchars($address). "<br /><br />";
      } 

      flock($file, LOCK_UN); // release read lock
      fclose($file); 
?> 
      
  </body>
</html>
