<?php 
session_start();

if(isset($_POST["login"])){
    $email = $_POST["email"];
    $pass  = $_POST["password"];

    if($email == "admin@gmail.com" && $pass == "admin123"){
        $_SESSION["admin"] = $email;
        header("location: dashboard.php");
        exit;
    } 
    else {
        $error = "Invalid Admin Email or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login - Library System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <div class="card shadow p-4">
                <h3 class="text-center mb-3">Admin Login</h3>

                <?php if(!empty($error)){ ?>
                    <div class="alert alert-danger text-center"><?= $error ?></div>
                <?php } ?>

                <form method="post">

                    <label>Admin Email</label>
                    <input type="email" name="email" class="form-control" required placeholder="admin@gmail.com"><br>

                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required placeholder="admin123"><br>

                    <button class="btn btn-danger btn-block" name="login">Login</button>

                </form>

                <a href="../index.php" class="btn btn-secondary btn-block mt-3">Back to Home</a>

            </div>
        </div>
    </div>
</div>

</body>
</html>
