<?php
// Connect to MySQL
$conn = mysqli_connect("localhost", "root", "", "homeopathy");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Set timezone to Indian Standard Time (IST)
date_default_timezone_set('Asia/Kolkata');

// Get current Indian timestamp
$currentTimestamp = date("Y-m-d H:i:s");
?>