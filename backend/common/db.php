<?php

// delete before deploy!
include('logger.php');
include('credentials.php');
mysqli_report(MYSQLI_REPORT_ALL);

$servername = "localhost";

// Create connection
$conn = new mysqli($servername, $admin, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT last_name FROM MyGuests";
$result = $conn->query($sql);

echo "Backend connected successfully";
