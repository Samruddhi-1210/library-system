<?php
session_start();
if(!isset($_SESSION["admin"])){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body{
            background: #f4f6f8;
            font-family: Arial, sans-serif;
        }
        .dashboard-card{
            max-width: 600px;
            margin: 80px auto;
            padding: 40px 30px;
            border-radius: 12px;
            background: #fff;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        h2{
            margin-bottom: 30px;
            color: #343a40;
            font-weight: 600;
        }
        .btn-custom{
            margin: 10px 0;
            width: 80%;
            padding: 12px;
            border-radius: 8px;
            font-weight: 500;
        }
        .btn-primary{ background-color: #007bff; border:none; }
        .btn-info{ background-color: #17a2b8; border:none; }
        .btn-warning{ background-color: #ffc107; border:none; color:#212529; }
        .btn-success{ background-color: #28a745; border:none; }
        .btn-danger{ background-color: #dc3545; border:none; }
        .btn-primary:hover{ background-color: #0069d9; }
        .btn-info:hover{ background-color: #138496; }
        .btn-warning:hover{ background-color: #e0a800; }
        .btn-success:hover{ background-color: #218838; }
        .btn-danger:hover{ background-color: #c82333; }
    </style>
</head>
<body>

<div class="dashboard-card">
    <h2>Admin Dashboard</h2>

    <a href="add_book.php" class="btn btn-primary btn-custom">Add New Book</a>
    <a href="manage_books.php" class="btn btn-info btn-custom">Manage Books</a>
    <a href="issue_book.php" class="btn btn-warning btn-custom">Issue Book</a>
    <a href="view_issued.php" class="btn btn-success btn-custom">View Issued Books</a>
    <a href="logout.php" class="btn btn-danger btn-custom mt-4">Logout</a>

</div>

</body>
</html>
