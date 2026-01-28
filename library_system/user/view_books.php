<?php
session_start();
include("../connection.php");

// Fetch all books
$res = mysqli_query($con, "SELECT * FROM books");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Available Books</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body{
            background: #eef0f3;
        }
        .card{
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
            background: #fff;
        }
        h3{
            font-weight: 600;
            margin-bottom: 20px;
        }
        table th{
            background: #343a40;
            color: #fff;
        }
        table tbody tr:hover{
            background: #f1f1f1;
            transition: 0.3s;
        }
        .btn-custom{
            border-radius: 6px;
            padding: 6px 16px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <h3>📚 Available Books</h3>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Total Copies</th>
                    <th>Available</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_assoc($res)){ ?>
                <tr>
                    <td><?= $row["title"] ?></td>
                    <td><?= $row["author"] ?></td>
                    <td><?= $row["category"] ?></td>
                    <td><?= $row["total_copies"] ?></td>
                    <td><?= $row["available_copies"] ?></td>
                    <td>
                        <a href="issue_book.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-custom">Issue</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
