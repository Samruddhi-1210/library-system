<?php 
include("../connection.php");

if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $pass=$_POST["password"];

    $qry="INSERT INTO users(name,email,password) VALUES('$name','$email','$pass')";
    mysqli_query($con,$qry);

    header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>User Register</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h3>User Registration</h3>
    <form method="post">
        <input type="text" name="name" class="form-control" placeholder="Name" required><br>
        <input type="email" name="email" class="form-control" placeholder="Email" required><br>
        <input type="password" name="password" class="form-control" placeholder="Password" required><br>
        <button class="btn btn-primary" name="submit">Register</button>
    </form>
</div>

</body>
</html>
