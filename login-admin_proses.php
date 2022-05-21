<?php 
include_once 'conn.php';

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE email='".$email."'";
$result = $conn -> query($sql);

$row = $result-> fetch_assoc();

if($password === $row["password"]) {
    $_SESSION['email'] = $row['email'];
    $_SESSION['adminid'] = $row['id'];
    $_SESSION['role'] = $row['role'];

    header('Location: admin.php');
} else {
    header('Location: login-admin.php');
}



?>
