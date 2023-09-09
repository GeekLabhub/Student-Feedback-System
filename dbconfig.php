<?php
$conn = mysqli_connect("localhost", "root", "", "feedback_system");

// Check connection
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>
