<?php 
include_once 'conn.php';

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='".$email."'";
$result = $conn -> query($sql);

$row = $result-> fetch_assoc();

if(password_verify($password, $row['password'])) {
    $_SESSION['email'] = $row['email'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['role'] = $row['role'];

    header('Location: home.php');
} else {
    header('Location: login.php');
}



?>
