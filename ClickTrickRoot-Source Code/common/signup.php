<?php

// Get input values
$uname = trim($_POST['uname']);
$upass1 = $_POST['upass1'];
$upass2 = $_POST['upass2'];
$user_type = $_POST['user_type'];

// Password match check
if ($upass1 !== $upass2) {
    echo "Password Mismatch";
    exit;
}

include_once "connection.php";

// Securely hash the password
$hashed_password = password_hash($upass1, PASSWORD_DEFAULT);

// Use prepared statements to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO user (username, password, usertype) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $uname, $hashed_password, $user_type);

if ($stmt->execute()) {
    echo "Signup Success!";
    header("Location: login.html");
    exit;
} else {
    echo "Signup Failed: " . $stmt->error;
}
?>
