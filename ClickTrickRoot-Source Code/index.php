<?php
// No redirect anymore; this is now a landing page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to the Journey</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
            max-width: 600px;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        .btn {
            background-color: #ff7e5f;
            border: none;
            padding: 15px 30px;
            color: white;
            font-size: 1.1em;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #feb47b;
        }

        .hint {
            margin-top: 20px;
            font-style: italic;
            color: #ccc;
            font-size: 0.95em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, Explorer!</h1>
        <p>
            You’ve just stumbled upon something curious...<br>
            Register as a guest to explore our world and view hidden posts.<br>
            Or... use your hacking skills to discover secrets lurking beneath the surface.
        </p>
        <a href="/common/login.html" class="btn">Let's Start the Journey</a>
        <div class="hint">Hint: Sometimes, the secrets are hidden in plain sight.</div>
    </div>
</body>
</html>

