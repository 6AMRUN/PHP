<!DOCTYPE html>
<!-- 
   
   AF_HTML_A8.html
   4/8/21

   -->
<html>

<head>
    <title>A8</title>
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

    </style>
</head>

<body>
    <header>
        <h1> Assigment 8</h1>
    </header>
    <?php
        $customerID = $_POST["customerID"];
        $name = $_POST["name"];
        $address = $_POST["address"];
        $city = $_POST["city"];
    
        // Connect to Database 
        $db = new mysqli('localhost', 'root', '', 'books');
        
        if (mysqli_connect_errno()) {
            echo '<p> Error </p>';
            exit;
        }
    
        $sql = "INSERT INTO Customers VALUES (?, ?, ?, ?)";
        $result = $db -> prepare($sql);
        $result -> bind_param('ssss', $customerID, $name, $address, $city);
        $result -> execute();
    
        if ($result ->affected_rows > 0) {
            echo  "<p> New customer data added. </p>";
        } else {
            echo "<p> CustomerID already exists. </p>";
        }
    
        echo "<br>";
        $query = "SELECT * FROM Customers";
        $result = $db -> query($query);
            
        if ($result ->num_rows > 0) {
            echo "Data within the Customers table";            
            echo "<table>";
            echo "<thead>
                    <tr>
                        <th> CustomerID </th>
                        <th> Name </th>
                        <th> Address </th>
                        <th> City </th> 
                    </tr>
                </thead>";
            // output data of each row
            while ($row = $result -> fetch_assoc()) {
                echo "<tr>
                        <td>" .$row["CustomerID"]. "</td>
                        <td>" .$row["Name"]. "</td>
                        <td>" .$row["Address"]. "</td>
                        <td>" .$row["City"]. "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }   
  
    $db -> close();
            
    ?>
</body>

</html>
