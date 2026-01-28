<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logged Out</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <meta http-equiv="refresh" content="2;url=login.php"> <!-- 2 seconds me redirect -->
    <style>
        body{
            background: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }
        .card{
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
            background: #fff;
            text-align: center;
        }
        h3{
            color: #343a40;
            margin-bottom: 15px;
        }
        p{
            color: #6c757d;
        }
        .spinner-border{
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="card">
    <h3>✔ You have been logged out!</h3>
    <p>Redirecting to Login page...</p>
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
</div>

</body>
</html>
