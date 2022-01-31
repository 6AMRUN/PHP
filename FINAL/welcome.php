<!DOCTYPE html>
<!-- 
   
   welcome.php
   May 3, 2021

   -->
<html>

<head>
    <title>AF Club</title>
    <style>
        table {
            border: 1px solid;
            border-collapse: collapse;
            padding-bottom: 0.5em;
        }

        td,
        th {
            border: 1px solid;
            padding: .3em;
            width: auto;
        }

        .center {
            margin-left: auto;
            margin-right: auto;
        }
        
    </style>
</head>

<body>
<?php
    require('Header.php');

    if(isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    }    
    
    $db = new mysqli('localhost', 'root', '', 'AFClub');
    if ( mysqli_connect_errno() ) {
	   echo "<p>Failed to connect</p>";
    }
        
    // Used to make webpage more secure
    $result = $db -> prepare("SELECT * FROM memberInfo WHERE email= ?");
    $result ->bind_param('s', $email);
    
    $result -> execute();
	$result->store_result();
    
    if ($result -> fetch() && $password == 'FinalProject2021') {
    ?>

    <form method="POST" action=" ">
        <p>Enter email address to view the memeber's information</p>
        <p>
            <label for="searchEmail">Email:</label>
            <input type="text" name="searchEmail" placeholder=" Search.." size="50">
        </p>
        <button type="Submit" name="Lookup">Look Up</button>
        <button type="Submit" name="view">View all members</button>
    </form>

<?php
    }
    else {
        echo "<p align=center>Incorrect email or password</p>";
    }    
    
    if(isset($_POST["view"])) {
        
        $db = new mysqli('localhost', 'root', '', 'AFClub');
        if (mysqli_connect_errno() ) {
            echo "<p>Failed to connect</p>";
        }
        
        $query = "SELECT * FROM memberInfo";
        $result = $db -> query($query);
            
        if ($result -> num_rows > 0) {     
            echo "<br><table class =center>";
            echo "<thead>
                    <tr>
                        <th> MemberID </th>
                        <th> First Name </th>
                        <th> Last Name </th>
                        <th> Address </th>
                        <th> Email </th> 
                    </tr>
                </thead>";
            // output data of each row
            while ($row = $result -> fetch_assoc()) {
                echo "<tr>
                        <td>" .$row["memberID"]. "</td>
                        <td>" .$row["FirstName"]. "</td>
                        <td>" .$row["LastName"]. "</td>
                        <td>" .$row["Address"]. "</td>
                        <td>" .$row["Email"]. "</td>
                      </tr>";
            }
            echo "</table>";
            echo "<br>";
        } 
    } // View All members in Database
    
    else if (isset($_POST["Lookup"])) {
        $search = $_POST['searchEmail'];
        $query = "SELECT * FROM memberInfo WHERE email = ?";
        $result = $db -> prepare($query);
        $result->bind_param('s', $search);  
        $result->execute();
        $result->store_result();
    
        $result->bind_result($memberID, $FirstName, $LastName, $Address, $Email);
        
        if($result->fetch()) {
            echo "<table class=center><tr><thead>
                    <tr>
                        <th> MemberID </th>
                        <th> First Name </th>
                        <th> Last Name </th>
                        <th> Address </th>
                        <th> Email </th> 
                    </tr>
                </thead>";          
            echo "<td>" . $memberID . "</strong></td>
                  <td>" . $FirstName . "</td>
                  <td>" . $LastName . "</td>
                  <td>" . $Address . "</td>
                  <td>" . $Email . "</td>
                  </tr></table>";
            echo "<br>";
        }
        else {
            echo "<p align=center>Member not found</p>";
        }
    }// Look up member in Database
    
    $result -> close();
    $db -> close();
    
    require('Footer.php');
    ?>
    
</body>

</html>
