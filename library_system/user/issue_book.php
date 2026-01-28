<?php
session_start();
include("../connection.php");

$uid = $_SESSION["user"];
$bid = $_GET["id"];

$q1 = mysqli_query($con,"SELECT id FROM users WHERE email='$uid'");
$u = mysqli_fetch_assoc($q1);
$userid = $u["id"];

mysqli_query($con,"INSERT INTO issued_books(user_id,book_id,issue_date,status) VALUES('$userid','$bid',CURDATE(),'Issued')");

header("location: my_issues.php");
?>
