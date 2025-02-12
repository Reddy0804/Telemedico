<?php
// Database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "telemedico";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch appointments
$sql = "SELECT * FROM appointments WHERE doctor_id = 'YOUR_DOCTOR_ID'";
$result = $conn->query($sql);

// Check if appointments exist
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<li>Appointment with Patient ID: " . $row["patient_id"]. " - Time: " . $row["appointment_time"]. "</li>";
    }
} else {
    echo "No appointments";
}
$conn->close();
?>
