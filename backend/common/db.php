<?php

// delete before deploy!
include('logger.php');
mysqli_report(MYSQLI_REPORT_ERROR);
require('credentials.php');

// Create connection
$conn = new mysqli($server, $admin, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT last_name, first_name, gender FROM teachers";
$db_result = $conn->query($sql);

$response = [];

if ($db_result->num_rows > 0) {
    while ($row_object = $db_result->fetch_object()) {
        array_push($response, $row_object);
    }
} else {
    echo "0 results";
}

echo json_encode($response);

$conn->close();
