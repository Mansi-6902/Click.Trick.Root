<?php

session_start();
$_SESSION['login_status'] = false;  // Default to not logged in

$uname = trim($_POST['uname']);
$upass = $_POST['upass'];

// Include connection
include_once "connection.php";

// Prepare the SQL query to prevent SQL injection
$stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
$stmt->bind_param("s", $uname);
$stmt->execute();
$result = $stmt->get_result();

// Check if user exists
if ($result->num_rows === 0) {
    echo 'Invalid Credentials';
    die;
}

// Fetch user data
$row = $result->fetch_assoc();

// Verify the password securely using password_verify()
if (!password_verify($upass, $row['password'])) {
    echo 'Invalid Credentials';
    die;
}

echo "Login Success";

// Set session variables upon successful login
$_SESSION['login_status'] = true;
$_SESSION['usertype'] = $row['usertype'];
$_SESSION['username'] = $row['username'];
$_SESSION['userid'] = $row['userid'];

// Redirect based on user type
if ($row['usertype'] == 'Admin') {
    header("Location: ../admin/home.php");
} elseif ($row['usertype'] == 'Author') {
    header("Location: ../author/home.php");
} elseif ($row['usertype'] == 'Guest') {
    header("Location: ../user/home.php");
}


exit;  // Ensure no further code is executed
?>
