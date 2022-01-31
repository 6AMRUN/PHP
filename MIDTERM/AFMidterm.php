<!-- 

   Student Name: Alexies Farinas
   File Name: header.php
   Date: March 5, 2021
   Description: This is the main php file, I have it where if the email is,
    we input the data into the text file. If not correct, the data doesn't get put in

-->
<html>
    <head>
        <title>Midterm Spring 2021</title>
        <meta charset= "utf-8" />
    </head>
<body>
<?php

// Command line to input header php file
  require('header.php');

?>
  <!-- page content -->
  <section>
      <br>
      <br>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <label for="nameinput">
        Please enter your first and last name:
          <input type="text" name="name" id="name input" required>
      </label>
          <br>
          <br>
          <label for="addressinput">
              Enter your email address: 
              <input type="text" name="email" size="50" maxlength="100">
          </label>         
          <br>
          <br>
        <label for ="number">Please enter a grade for Assignment 1: 
        <input type="number" name="num1" max="100">
        </label>
      <br>
    <br>
        <label for ="number">Please enter a grade for Assignment 2: 
        <input type="number" name="num2" max="100">
        </label>
      <br>
    <br>
        <label for ="number">Please enter a grade for Assignment 3: 
        <input type="number" name="num3" max="100">
        </label>
      <br>
    <br>
        <label for ="number">Please enter a grade for Assignment 4: 
        <input type="number" name="num4" max="100">
        </label>
      <br>
    <br>  
         <label for ="number">Please enter a grade for Assignment 5: 
        <input type="number" name="num5" max="100">
        </label>
      <br>
          <br>
     <input type="submit" value="Submit" />
          <br>
          <br>
    </form>
  </section>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// variable names
$name = $_POST['name'];
$email = $_POST['email'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$num4 = $_POST['num4'];
$num5 = $_POST['num5'];

// Creating an array for the assignments to put them in ascending order
$assignments = array($num1, $num2, $num3, $num4, $num5);
    asort($assignments);
// This outputs the array, with a comma and space after each numbers
$scoreArray = implode(', ', $assignments);
    sort($assignments);
    
// Function used to split the name into first and last name    
function welcome ($n){
    list($firstName, $lastName) = explode(" ", $n);
    echo "Hello " . $firstName . ". Thank you for entering the data <br>";
}    
    // Line used to call the welcome function
     welcome($name);

// if the email has gmail.com in the input, we save the data into a text file
if (strpos($email, 'gmail.com') == true){
    echo "<p>Correct email ID entered.</p>";
    
      $data = "Name: " . $name . "\nEmail: ". $email . "\nAssignment 1: " . $num1 . "\nAssignment 2: " . $num2 . "\nAssignment 3: " . $num3 . "\nAssignment 4: " . $num4 . "\nAssignment 5: " . $num5 . "\n\n"; 
      
      @$file = fopen("AFMidterm.txt", 'ab');
    
      fwrite($file, $data); // writes the data into the text file
      
      flock($file, LOCK_SH); // lock file for reading
      fclose($file);  // closing the file
    
    // Function used to find the avg of the 5 assignments
    function avg ($n1, $n2, $n3, $n4, $n5) {
        $total = $n1 + $n2 + $n3 + $n4 + $n5;
        $avgScore = $total/5;
        return $avgScore;
    }
    
    echo "The assignment grades that input are: " . $scoreArray . "<br>";
    
    echo "Your highest grade score is: " . $largest = max($assignments) . "<br>";
    echo "Your lowest grade score is: " . $lowest = min($assignments) . "<br>";
    echo "The average score for the 5 assignments is: " . avg($num1, $num2, $num3, $num4, $num5);
    
}
    
// else if email does not have gooogle email, output is incorrect and asks
// the user to try again. 
else{
    echo "<p>However, </p>";
    echo "<p>The email address should contain gmail.com.";
    echo "<br> Please try again.</p>";
}
               
} // IF POST

// Command line to input the footer php file
  require('footer.php');
?>
</body>
</html>

