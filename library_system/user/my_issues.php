<?php
session_start();
include("../connection.php");

if(!isset($_SESSION["user"])){
    header("Location: login.php");
    exit;
}

$uid = $_SESSION["user"];

// Fetch user id
$q1 = mysqli_query($con,"SELECT id FROM users WHERE email='$uid'");
$u = mysqli_fetch_assoc($q1);

if(!$u){
    die("User not found");
}

$userid = $u["id"];

// Fetch issued books
$q2 = mysqli_query($con, "
SELECT ib.*, b.title 
FROM issue_book ib 
JOIN books b ON b.id = ib.book_id 
WHERE user_id='$userid'
");
?>

<!DOCTYPE html>
<html>
<head>
<title>My Issued Books</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<style>
    body{
        background: #f4f6f8;
        font-family: Arial, sans-serif;
    }
    .card{
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
        background: #fff;
        margin-top: 30px;
    }
    h3{
        font-weight: 600;
        margin-bottom: 20px;
        color: #343a40;
    }
    table th{
        background-color: #343a40;
        color: #fff;
    }
    table tbody tr:hover{
        background-color: #e9ecef;
        transition: 0.3s;
    }
    .status-issued{
        color: #ffc107;
        font-weight: 500;
    }
    .status-returned{
        color: #28a745;
        font-weight: 500;
    }
</style>
</head>
<body>

<div class="container">
    <div class="card">
        <h3>📚 My Issued Books</h3>

        <?php if(mysqli_num_rows($q2) == 0){ ?>
            <div class="alert alert-info">You have not issued any books yet.</div>
        <?php } else { ?>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Book</th>
                        <th>Issued Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($q2)){ ?>
                    <tr>
                        <td><?= $row["title"] ?></td>
                        <td><?= date("d M Y", strtotime($row["issue_date"])) ?></td>
                        <td class="<?= strtolower($row['status'])=='issued'?'status-issued':'status-returned' ?>">
                            <?= $row["status"] ?>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        <?php } ?>
    </div>
</div>

</body>
</html>
