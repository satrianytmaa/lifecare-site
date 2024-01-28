<?php
require('db.php');
session_start();
// Include your database connection or initialization code

if (isset($_GET['id'])) {
    $appointment_id = $_GET['id'];

    // Perform the update query to change the status to "Disetujui"
    $query_update = "UPDATE appointment SET status = 'Disetujui' WHERE id_appointment = $appointment_id";

    // Execute the update query
    if ($DB->query($query_update)) {
        // Redirect back to the page displaying appointments after the update
        header("Location: /lifecare-site/admin/appointment/index.php"); // Change 'appointments.php' to your actual page name
        exit();
    } else {
        // Handle error if the update fails
        echo "Error updating status: " . $DB->error;
    }
} else {
    // Handle error if 'id' parameter is not set
    echo "Invalid request.";
}
?>
