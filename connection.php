<?php
 
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername,$username,$password) or die("could not connect to db");
    if (!$conn) 
    {
     die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

?>