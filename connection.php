<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BusApp";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Close the database connection
// mysqli_close($conn);

?>