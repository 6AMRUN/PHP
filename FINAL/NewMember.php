<!DOCTYPE html>
<!-- 
   
   NewMember.html
   5/3/21

   -->
<html>

<head>
    <title>AF Club</title>
</head>

<body>
    <?php
    require('Header.php');
    ?>

    <form method="POST" action=" ">
        <p>Enter the following information in order to become a memeber of the club</p>
        <p>
            <label for="nameinput">First Name: </label>
            <input type="text" name="FName" placeholder=" Your name.." size="50">
        </p>
        <p>
            <label for="nameinput">Last Name: </label>
            <input type="text" name="LName" placeholder=" Your last name.." size="50">
        </p>
        <p>
            <label for="addressinput">Address: </label>
            <input type="text" name="Address" placeholder=" Your address.." size="50">
        </p>
        <p>
            <label for="cityinput">Email: </label>
            <input type="text" name="Email" placeholder=" Your email address.." size="50">
        </p>
        <button type="submit" name="submit">Enter</button>
    </form>

<?php
    
    // Connect to Database 
    $db = new mysqli('localhost', 'root', '', 'AFclub');
        
    if (mysqli_connect_errno()) {
        echo '<p align=center> Error </p>';
    }
    
    if (!isset($_POST['FName']) || !isset($_POST['LName']) 
        || !isset($_POST['Address']) || !isset($_POST['Email'])) {
    }
    else {
        $FName = $_POST["FName"];
        $LName = $_POST["LName"];
        $Address = $_POST["Address"];
        $Email = $_POST["Email"];
        
        if (empty($FName) || empty($LName) || empty($Address) || empty ($Email)) {
            echo "<p align=center>Error: Information cannot be blank</p>";
        }
        else if (strpos($Email, '@gmail.com') == true) {
            $sql = "INSERT INTO memberInfo (FirstName, LastName, Address, Email) VALUES (?, ?, ?, ?)";
            $result = $db -> prepare($sql);
            $result -> bind_param('ssss', $FName, $LName, $Address, $Email);
            $result -> execute();

            if ($result -> affected_rows > 0) {
                echo  "<p align=center>User has been added</p>";
            } 
            else {
                echo "<p align=center>An error has occurred.<br/>
                         The item was not added.</p>";
            }            
        }
        else {
            echo "<p align=center>Please use a Gmail account</p>";
        }
    }
        
    $db -> close();
    ?>
    
<?php  
    require('Footer.php');
    ?>
</body>

</html>
