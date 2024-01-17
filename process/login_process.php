<?php
// Establish a database connection (replace these values with your actual database credentials)
require('db.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process login form

$conn->close();
?>
