<?php 
include_once 'conn.php';

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE email='".$email."'";
$result = $conn -> query($sql);



if($row = $result-> fetch_assoc()) {
    $_SESSION['email'] = $row['email'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['role'] = $row['role'];

    header('Location: admin.php');
} else {
    header('Location: login-admin.php');
}



?>
