<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['login_status']) || $_SESSION['login_status'] !== true) {
    echo "Access Denied. Please <a href='../common/login.html'>login</a> first.";
    die;
}

$username = $_SESSION['username'];
$usertype = $_SESSION['usertype'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #d9a7c7, #fffcdc);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
        }

        .welcome-box {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        h1 {
            font-size: 2rem;
        }
    </style>
</head>
<body>

<div class="welcome-box">
    <h1>Welcome, <?php echo htmlspecialchars($usertype); ?>!</h1>
    <p>Hello <strong><?php echo htmlspecialchars($username); ?></strong>, you are logged in as a <strong><?php echo htmlspecialchars($usertype); ?></strong>.</p>
  <div class="d-flex flex-column" >
    <a href="../common/logout.php" class="btn btn-danger mt-3">Logout</a>
    <a href="viewpost.html" class="btn btn-primary mt-2">View Post</a>
    <a href="upload.html" class="btn btn-primary mt-2">Write a post</a>
  </div>
</div>

</body>
</html>
