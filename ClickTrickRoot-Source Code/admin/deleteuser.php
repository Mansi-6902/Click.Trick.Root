<?php
include('../common/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['uname'];
    $sql = "DELETE FROM user WHERE username='$username'";
    if (mysqli_query($conn, $sql)) {
        echo "User deleted successfully! THM{CSRF_success_flag}";
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
}
?>

