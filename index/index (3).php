<?php
session_start(); // Start or resume session to check login status

// If the user is not logged in, redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: Group14_1D_sessionLog.php");
    exit(); // Prevent further execution
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e6f2ff;
            margin: 0;
            padding: 0;
        }
        .logout-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #3399ff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .box {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 400px;
            margin: 100px auto;
            text-align: center;
        }
    </style>
</head>
<body>

    <a class="logout-btn" href="Group14_1D_logout.php">Logout</a>

    <div class="box">
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    </div>

</body>
</html>