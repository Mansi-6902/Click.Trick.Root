<?php
session_start();
include "../admin/dashboard.php";

// Check login status
if (!isset($_SESSION['login_status'])) {
    echo "You skipped the Login ...";
    echo "<a href='../common/login.html'>Login here</a>";
    die;
}

if ($_SESSION['login_status'] == false) {
    echo "Login failed";
    echo "<a href='../common/login.html'>Login here</a>";
    die;
}

if ($_SESSION['usertype'] != 'Admin') {
    echo "Unauthorized Access for this User";
    die;
}

$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
$usertype = $_SESSION['usertype'];

// Display user info with direct logout link (CSRF-vulnerable)
echo "
<div class='userbanner'>
    <div class='userid'>#$userid</div>
    <div class='username'>$username</div>
    <div class='usertype'>$usertype</div>
    <div style='margin-top:10px'>
        <a href='../common/logout.php'>Logout</a> <!-- This is vulnerable to CSRF -->
    </div>
</div>
";
?>
