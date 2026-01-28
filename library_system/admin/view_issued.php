<?php 
session_start();
include("../connection.php");

// Query with error handling
$qry = mysqli_query($con, "
SELECT issue_book.id, users.name, books.title, issue_book.issue_date, issue_book.status
FROM issue_book
JOIN users ON issue_book.user_id = users.id
JOIN books ON issue_book.book_id = books.id
");

if(!$qry){
    die("Query Failed: " . mysqli_error($con));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Issued Books</title>

    <!-- Bootstrap 4 -->
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
        .badge-issued{
            background: #007bff;
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
        }
        .badge-returned{
            background: #28a745;
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
        }
        .btn-custom{
            border-radius: 6px;
            padding: 8px 18px;
            font-weight: 500;
        }
    </style>
</head>

<body>
<div class="container mt-5">

    <div class="card">

        <h3>📚 Issued Books</h3>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Book</th>
                    <th>Issued On</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
            <?php while($row = mysqli_fetch_assoc($qry)){ ?>

                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row["name"] ?></td>
                    <td><?= $row["title"] ?></td>
                    <td><?= $row["issue_date"] ?></td>

                    <td>
                        <?php if($row["status"] == "Issued"){ ?>
                            <span class="badge-issued">Issued</span>
                        <?php } else { ?>
                            <span class="badge-returned">Returned</span>
                        <?php } ?>
                    </td>
                </tr>

            <?php } ?>
            </tbody>
        </table>

        <a href="dashboard.php" class="btn btn-secondary btn-custom">⬅ Back</a>
    </div>

</div>
</body>
</html>
