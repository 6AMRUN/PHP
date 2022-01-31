<!DOCTYPE html>
<!-- 
   
   AF_HTML_A4.html
   2/21/21
   -->
<html>

<head>
    <title>A4</title>
</head>

<body>
    <header>
        <h1> Assigment 4</h1>
    </header>
</body>

</html>

<?php

// variable names
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$email = $_POST['email'];
$csn = $_POST['csn'];
$total = 123;

$fName = strtolower(trim($fName));
$lName = strtolower(trim($lName));

if (strpos($email, '.edu') == true){
    if (strlen($fName) <= 1 || strlen($lName) <= 1){
        echo "<p>Please go back to the previous page to enter the first and last name.</p>";
    }
    else{
        echo "<p> Your new email id is: ".$fName.".".$lName."@myschool.edu </p>";
    }
}
else{
    echo "<p>Please go back to use a edu email.</p>";
}

if(preg_match(' #http://# ' ,$csn)) {
    echo "Thank you for sharing the web address";
}
else{
    echo "You entered the incorrect web address";
    }

printf ("<p>Total amount of order is %.2f", $total, "</p>");
?>
