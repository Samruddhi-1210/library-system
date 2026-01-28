<?php 
session_start();
include("../connection.php");

$msg = "";

// Fetch users & books
$users = mysqli_query($con, "SELECT * FROM users");
$books = mysqli_query($con, "SELECT * FROM books");

if(isset($_POST["issue"])){
    $user = $_POST["user_id"];
    $book = $_POST["book_id"];

    // Check book availability
    $check = mysqli_query($con, "SELECT available_copies FROM books WHERE id=$book");
    $data = mysqli_fetch_assoc($check);

    if($data["available_copies"] > 0){

        mysqli_query($con, "INSERT INTO issue_book(user_id, book_id, issue_date, status)
                            VALUES('$user','$book', NOW(),'Issued')");

        mysqli_query($con, "UPDATE books SET available_copies = available_copies - 1
                            WHERE id=$book");

        $msg = "<strong>Success:</strong> Book Issued Successfully!";
        $alert = "success";
    }
    else {
        $msg = "<strong>Error:</strong> Book Not Available!";
        $alert = "danger";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Issue Book</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <style>
        body{
            background: #eef0f3;
        }
        .card{
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            background: #fff;
        }
        h3{
            font-weight: 600;
            margin-bottom: 20px;
        }
        label{
            font-weight: 500;
        }
        select{
            border-radius: 6px;
        }
        .btn-custom{
            padding: 8px 20px;
            border-radius: 6px;
            font-weight: 500;
        }
        .alert{
            border-radius: 6px;
        }
    </style>
</head>

<body>
<div class="container mt-5">

    <div class="card">

        <h3>📘 Issue Book</h3>

        <?php if($msg!=""){ ?>
            <div class="alert alert-<?= $alert ?>"><?= $msg ?></div>
        <?php } ?>

        <form method="post">

            <div class="form-group">
                <label>Select User</label>
                <select name="user_id" class="form-control" required>
                    <option value="">Choose User</option>
                    <?php while($u = mysqli_fetch_assoc($users)){ ?>
                    <option value="<?= $u['id'] ?>"><?= $u['name'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label>Select Book</label>
                <select name="book_id" class="form-control" required>
                    <option value="">Choose Book</option>
                    <?php while($b = mysqli_fetch_assoc($books)){ ?>
                    <option value="<?= $b['id'] ?>"><?= $b['title'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <button class="btn btn-warning btn-custom" name="issue">Issue</button>
            <a href="dashboard.php" class="btn btn-secondary btn-custom">⬅ Back</a>
        </form>
    </div>

</div>
</body>
</html>
