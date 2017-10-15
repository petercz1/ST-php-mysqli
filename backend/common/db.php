<?php

// delete before deploy!
include('logger.php');
include('credentials.php');
mysqli_report(MYSQLI_REPORT_ERROR);

// Create connection
$conn = new mysqli($server, $admin, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT last_name, course FROM teachers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo json_encode($result);
    }
} else {
    echo "0 results";
}
$conn->close();


echo "Backend connected successfully";
