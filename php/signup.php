<?php
require '../configs/config.php'; // Ensure the path is correct

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // Using prepared statements
    $stmt = $conn->prepare("INSERT INTO `users` (`name`, `email`, `mobile`, `password`) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $mobile, $password);

    if ($stmt->execute()) {
        echo "<script type='text/javascript'>alert('Signup successful'); window.location.href = '../index.php';</script>";
    } else {
        error_log("Error: " . $stmt->error);
        echo "<script type='text/javascript'>alert('There was an error processing your request. Please try again later.'); window.location.href = '../pages/signup.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
