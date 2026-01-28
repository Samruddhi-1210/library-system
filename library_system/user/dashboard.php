<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body{
            background: #f4f6f8;
            font-family: Arial, sans-serif;
        }
        .card{
            max-width: 500px;
            margin: 80px auto;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
            background: #fff;
            text-align: center;
        }
        h3{
            font-weight: 600;
            margin-bottom: 25px;
            color: #343a40;
        }
        .btn-custom{
            margin: 10px 5px;
            width: 80%;
            padding: 10px;
            border-radius: 8px;
            font-weight: 500;
        }
        .btn-info{ background-color: #17a2b8; border:none; }
        .btn-warning{ background-color: #ffc107; border:none; color:#212529; }
        .btn-danger{ background-color: #dc3545; border:none; }
        .btn-info:hover{ background-color: #138496; }
        .btn-warning:hover{ background-color: #e0a800; }
        .btn-danger:hover{ background-color: #c82333; }
    </style>
</head>
<body>

<div class="card">
    <h3>Welcome, <?= $_SESSION["user"] ?></h3>

    <a href="view_books.php" class="btn btn-info btn-custom">View Books</a>
    <a href="my_issues.php" class="btn btn-warning btn-custom">My Issued Books</a>
    <a href="logout.php" class="btn btn-danger btn-custom">Logout</a>
</div>

</body>
</html>
