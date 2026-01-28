<?php 
session_start();
include("../connection.php");
$books = mysqli_query($con, "SELECT * FROM books");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Books</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- CUSTOM STYLE -->
    <style>
        body{
            background: #f1f3f6;
        }
        .card{
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        h3{
            font-weight: 600;
        }
        .table thead{
            background: #343a40;
            color: white;
        }
        .table tbody tr:hover{
            background: #f7f7f7;
            transition: 0.3s;
        }
        .back-btn{
            border-radius: 5px;
            padding: 8px 18px;
        }
    </style>
</head>

<body>
<div class="container mt-5">

    <div class="card p-4">
        <h3 class="mb-3">📚 Manage Books</h3>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th><th>Title</th><th>Author</th>
                    <th>Category</th><th>Total</th><th>Available</th>
                </tr>
            </thead>

            <tbody>
                <?php while($row = mysqli_fetch_assoc($books)){ ?>
                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row["title"] ?></td>
                    <td><?= $row["author"] ?></td>
                    <td><?= $row["category"] ?></td>
                    <td><?= $row["total_copies"] ?></td>
                    <td><?= $row["available_copies"] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <a href="dashboard.php" class="btn btn-secondary back-btn">⬅ Back</a>
    </div>
</div>

</body>
</html>
