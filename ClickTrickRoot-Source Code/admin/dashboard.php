<?php
session_start();
if(!isset($_SESSION['login_status']) || $_SESSION['login_status']!== true) {
echo "Access Denied Please <a href='../common/login.html'>login</a> first";
die;}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            width: 220px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 60px;
        }
        .sidebar a {
            padding: 15px;
            display: block;
            color: white;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .main-content {
            margin-left: 200px;
            padding: 20px;
        }
        .section {
            margin-bottom: 60px;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .btn-dark {
            background-color: #343a40;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <a href="#addUser">Add User</a>
    <a href="#deleteUser">Delete User</a>
    <a href="#deletePost">Delete Post</a>
    <a href="#updatePassword">Update Password</a>
    <a href="viewpost.html">View All Posts</a>
    <a href="../common/logout.php">Logout</a>
</div>

<div class="main-content">
    <h2 class="text-center mb-5">Welcome, Admin</h2>

    <div id="addUser" class="section">
        <div class="card p-4">
            <h5 class="mb-3">Add User</h5>
            <form action="../common/signup.php" method="post" class="form-control mb-2" onsubmit="return validate()">
             <input name="uname" required class="form-control mb-2" type="text" placeholder="Enter username">
             <input name="upass1" required class="form-control mb-2" type="password" placeholder="Enter Password" id="pass1">
             <input name="upass2" required class="form-control mb-2" type="password" placeholder="Retype Password" id="pass2">
             <select name="user_type" required class="form-control mt-2">
                <option>Author</option>
                <option>Guest</option>
                <option>Admin</option>
            </select>
            <div class="text-center">
                <button class="btn btn-dark w-100" type="submit">Submit</button>
            </div>
        </form>

        
    </div>

    <script>
        function validate(){
            let pass1Obj = document.getElementById("pass1");
            let pass2Obj = document.getElementById("pass2");

            if(pass1Obj.value === pass2Obj.value){
                return true;
            }
            alert("Password Mismatch");
            return false;
        }
    </script>


    <div id="deleteUser" class="section">
        <div class="card p-4">
            <h5 class="mb-3">Delete User</h5>
            <form action="deleteuser.php" method="POST">
                <input type="text" name="uname" class="form-control mb-2" placeholder="Username to Delete" required>
                <button class="btn btn-danger w-100">Delete User</button>
            </form>
        </div>
    </div>

    <div id="deletePost" class="section">
        <div class="card p-4">
            <h5 class="mb-3">Delete Post</h5>
            <form action="deletepost.php" method="POST">
                <input type="text" name="post_id" class="form-control mb-2" placeholder="Post ID to Delete" required>
                <button class="btn btn-danger w-100">Delete Post</button>
            </form>
        </div>
    </div>


</div>

</body>
</html>
