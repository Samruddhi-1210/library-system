<?php
include("../connection.php");

$msg = "";

if(isset($_POST["add"])){

    $title = $_POST["title"];
    $author = $_POST["author"];
    $category = $_POST["category"];
    $qty = $_POST["copies"];

    // INSERT QUERY
    $qry = "INSERT INTO books(title, author, category, total_copies, available_copies)
            VALUES('$title','$author','$category','$qty','$qty')";

    if(mysqli_query($con, $qry)){
        $msg = "<div class='alert alert-success'>Book Added Successfully!</div>";
    } else {
        $msg = "<div class='alert alert-danger'>Error: ". mysqli_error($con) ."</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>

    <!-- BOOTSTRAP 4 CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <style>
        body{
            background:#f5f7fa;
        }
        .card{
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
            border-radius: 10px;
        }
        .container-box{
            margin-top: 60px;
            max-width: 600px;
        }
    </style>
</head>
<body>

<div class="container container-box">
    
    <div class="card">
        <div class="card-header bg-primary text-white text-center">
            <h4>Add New Book</h4>
        </div>

        <div class="card-body">

            <!-- MSG AREA -->
            <?php echo $msg; ?>

            <form method="POST">

                <div class="form-group">
                    <label><b>Book Title</b></label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="form-group">
                    <label><b>Author</b></label>
                    <input type="text" name="author" class="form-control" required>
                </div>

                <div class="form-group">
                    <label><b>Category</b></label>
                    <input type="text" name="category" class="form-control" required>
                </div>

                <div class="form-group">
                    <label><b>Quantity</b></label>
                    <input type="number" name="copies" class="form-control" required>
                </div>

                <button type="submit" name="add" class="btn btn-success btn-block">Add Book</button>
                <a href="dashboard.php" class="btn btn-secondary btn-block mt-2">Back to Dashboard</a>

            </form>

        </div>
    </div>

</div>

</body>
</html>
