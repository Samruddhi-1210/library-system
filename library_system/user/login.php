<?php 
session_start();
include("../connection.php");

if(isset($_POST["login"])){
    $email=$_POST["email"];
    $pass=$_POST["password"];

    $qry="SELECT * FROM users WHERE email='$email' AND password='$pass'";
    $res=mysqli_query($con,$qry);

    if(mysqli_num_rows($res)>0){
        $_SESSION["user"]=$email;
        header("location: dashboard.php");
    }else{
        echo "<script>alert('Invalid Credentials');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h3>User Login</h3>
    <form method="post">
        <input type="email" name="email" class="form-control" placeholder="Email"><br>
        <input type="password" name="password" class="form-control" placeholder="Password"><br>
        <button class="btn btn-success" name="login">Login</button>
    </form>
</div>

</body>
</html>
