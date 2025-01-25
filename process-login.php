<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Sanitize input
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

    // Check if inputs are received
    if (!$username || !$password) {
        die("Username or password not provided!");
    }

    // Database connection
    $conn = new mysqli("localhost", "root", "", "hospital");

    // Check connection
    if ($conn->connect_error) {
        die('Database connection error: ' . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO patient_login (username, password) VALUES (?, ?)");
    if (!$stmt) {
        die('SQL prepare error: ' . $conn->error);
    }

    // Bind parameters and execute
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        echo "New record is inserted.";
    } else {
        echo "SQL execution error: " . $stmt->error;
    }

    // Close connections
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>