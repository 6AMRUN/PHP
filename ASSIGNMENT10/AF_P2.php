<?php

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Connect to Database 
    $db = new mysqli('localhost', 'root', '', 'test');
    
    if (mysqli_connect_errno()) {
        echo '<p> Error </p>';
        exit;
    }

    // Used to make webpage more secure
    $result = $db -> prepare("SELECT * FROM login_info WHERE username= ? AND password = ?");
    $result ->bind_param('ss', $username, $password);
    
    $result -> execute();
    
    if($result -> fetch()) {
        echo "<h1>Welcome back</h1><br>";
    }
    else {
        echo "<h1>Sorry you do not have the access to this page.</h1>";
    }
    
    $db -> close();

?>