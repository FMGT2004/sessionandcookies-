<?php
session_start(); // Start or resume a session

// Define valid login credentials
$validUser = "Group14";
$validPass = "1D2D3D";

// Check if username and password from the form match the valid credentials
if ($_POST['username'] == $validUser && $_POST['password'] == $validPass) {
    // Store the username in session variable
    $_SESSION['username'] = $_POST['username'];

    // Redirect to the welcome page
    header("Location: Group14_1D_welcome.php");
} else {
    // If credentials are invalid, show an error message line 46.
    echo "
    <html>
    <head>
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #e6f2ff;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                text-align: center;
            }
            .box {
                background-color: white;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            }
            a {
                display: inline-block;
                margin-top: 15px;
                color: #3399ff;
                text-decoration: none;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class='box'>
            <h2>Invalid username or password.</h2>
            <a href='Group14_1D_sessionLog.php'>Try Again</a>
        </div>
    </body>
    </html>
    ";
}

?>